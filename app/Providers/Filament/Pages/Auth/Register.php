<?php

namespace App\Providers\Filament\Pages\Auth;

use Filament\Forms\Get;
use Filament\Facades\Filament;
use Filament\Forms\Components\Grid;
use Filament\Events\Auth\Registered;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Register as BaseRegister;
use Filament\Http\Responses\Auth\RegistrationResponse;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;

class Register extends BaseRegister
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->extraAttributes(['class' => 'mx-auto w-full max-w-4xl'])
                    ->schema([
                        Wizard::make([
                            Wizard\Step::make('Acesso')
                                ->schema([
                                    // ...
                                    $this->getNameFormComponent(),
                                    $this->getEmailFormComponent(),
                                    $this->getPasswordFormComponent(),
                                    $this->getPasswordConfirmationFormComponent(),
                                    Select::make('type')
                                        ->label('Como deseja se cadastrar?')
                                        ->options([
                                            'CANDIDATE' => 'Candidato',
                                            'COMPANY' => 'Recrutador',
                                        ])
                                ]),
                            Wizard\Step::make('Informações extras')
                                ->schema(function (Get $get) {
                                    $type = $get('type');
                                    return match ($type) {
                                        'CANDIDATE' => $this->getCandidatoSchema(),
                                        'COMPANY' => $this->getRecrutadorSchema(),
                                        default => [],
                                    };
                                }),
                            Wizard\Step::make('Informações profissionais')
                                ->visible(fn(Get $get): bool => $get('type') === 'CANDIDATE')
                                ->schema([
                                    // ...
                                ]),
                        ])


                    ])
                    ->statePath('data'),
            ),
        ];
    }

    public function register(): ?RegistrationResponse
    {
        try {
            $this->rateLimit(2);
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return null;
        }

        $user = $this->wrapInDatabaseTransaction(function (): Model {
            $this->callHook('beforeValidate');

            $data = $this->form->getState();

            $this->callHook('afterValidate');

            $data = $this->mutateFormDataBeforeRegister($data);

            $this->callHook('beforeRegister');

            $user = $this->handleRegistration($data);

            $this->form->model($user)->saveRelationships();

            $this->callHook('afterRegister');

            return $user;
        });

        event(new Registered($user));

        $this->sendEmailVerificationNotification($user);

        Filament::auth()->login($user);

        session()->regenerate();

        return app(RegistrationResponse::class);
    }

    protected function getCandidatoSchema(): array
    {
        return [
            TextInput::make('teste')
                ->label('candidato')
                ->required()
                ->maxLength(255)
                ->autofocus()
        ];
    }

    protected function getRecrutadorSchema(): array
    {
        return [
            Grid::make()
                ->columns([
                    'default' => 1,
                    'md' => 2,
                ])
                ->schema([
                    TextInput::make('cnpj')
                        ->label('CNPJ')
                        ->placeholder('00.000.000/0000-00')
                        ->helperText('Informe o CNPJ completo da empresa.')
                        ->maxLength(18),

                    TextInput::make('nome_fantasia')
                        ->label('Nome fantasia')
                        ->placeholder('Ex.: Padaria Bom Sabor')
                        ->helperText('Nome pelo qual a empresa é conhecida pelos clientes.')
                        ->maxLength(255),

                    TextInput::make('razao_social')
                        ->label('Razão social')
                        ->placeholder('Ex.: Bom Sabor Comércio de Alimentos LTDA')
                        ->helperText('Razão social registrada nos documentos da empresa.')
                        ->maxLength(255)
                        ->columnSpanFull(),

                    TextInput::make('cep')
                        ->label('CEP')
                        ->placeholder('00000-000')
                        ->helperText('Digite o CEP do endereço.'),

                    TextInput::make('rua')
                        ->label('Rua / Logradouro')
                        ->placeholder('Ex.: Rua das Flores')
                        ->helperText('Endereço principal da empresa.')
                        ->maxLength(255),

                    TextInput::make('numero')
                        ->label('Número')
                        ->placeholder('Ex.: 123')
                        ->helperText('Número do endereço. Use "S/N" no complemento, se necessário.')
                        ->numeric(),

                    TextInput::make('complemento')
                        ->label('Complemento')
                        ->placeholder('Ex.: Sala 3, Bloco B')
                        ->helperText('Informações adicionais do endereço (opcional).')
                        ->maxLength(255),

                    TextInput::make('bairro')
                        ->label('Bairro')
                        ->placeholder('Ex.: Centro')
                        ->helperText('Bairro onde a empresa está localizada.')
                        ->maxLength(255),

                    TextInput::make('cidade')
                        ->label('Cidade')
                        ->placeholder('Ex.: São Paulo')
                        ->helperText('Cidade do endereço da empresa.')
                        ->maxLength(255),

                    TextInput::make('estado')
                        ->label('Estado (UF)')
                        ->placeholder('Ex.: SP')
                        ->helperText('Informe a sigla do estado (UF).')
                        ->maxLength(2),

                    TextInput::make('whatsapp')
                        ->label('WhatsApp')
                        ->placeholder('(11) 90000-0000')
                        ->helperText('Número de WhatsApp para contato, com DDD.')
                        ->tel()
                        ->maxLength(20),

                    TextInput::make('telefone')
                        ->label('Telefone fixo')
                        ->placeholder('(11) 4000-0000')
                        ->helperText('Telefone fixo para contato, se houver.')
                        ->tel()
                        ->maxLength(20),
                ]),

            Textarea::make('descricao')
                ->label('Descrição da empresa')
                ->placeholder('Descreva brevemente a empresa, seus serviços e diferenciais.')
                ->helperText('Esse texto pode ser exibido para clientes em páginas públicas.')
                ->rows(4)
                ->columnSpanFull(),

            Checkbox::make('terms_accepted')
                ->label('Li e aceito os termos de uso')
                ->helperText('Você precisa aceitar os termos de uso para continuar.')
                ->accepted()
                ->columnSpanFull(),
        ];
    }
}
