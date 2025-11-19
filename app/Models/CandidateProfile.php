<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    //
    protected $fillable = [
        'user_id',
        'estado_civil',
        'sexo',
        'deficiencia',
        'filhos',
        'filhos_qtd',
        'cpf',
        'nascimento',
        'celular',
        'celular_whatsapp',
        'telefone',
        'telefone_whatsapp',
        'cep',
        'rua',
        'numero',
        'complemento',
        'estado',
        'cidade',
        'bairro',
        'escolaridade',
        'escolaridade_nivel',
        'curso_superior',
        'curso',
        'idioma',
        'profissao',
        'cargo',
        'cargo_dois',
        'cargo_tres',
        'interesse',
        'interesse_dois',
        'interesse_tres',
        'trabalha_atualmente',
        'pretensao_salarial_de',
        'pretensao_salarial_ate',
        'experiencia',
        'cnh',
        'complementos',
        'habilidades',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
