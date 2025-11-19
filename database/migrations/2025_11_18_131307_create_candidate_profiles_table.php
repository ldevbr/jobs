<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidate_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('estado_civil')->nullable();
            $table->string('sexo')->nullable();
            $table->string('deficiencia')->nullable();
            $table->string('filhos')->nullable();
            $table->string('filhos_qtd')->nullable();
            $table->string('cpf')->nullable();
            $table->string('nascimento')->nullable();
            $table->string('celular')->nullable();
            $table->boolean('celular_whatsapp')->nullable();
            $table->string('telefone')->nullable();
            $table->boolean('telefone_whatsapp')->nullable();
            $table->string('cep')->nullable();
            $table->string('rua')->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('escolaridade')->nullable();
            $table->string('escolaridade_nivel')->nullable();
            $table->json('curso_superior')->nullable();
            $table->json('curso')->nullable();
            $table->json('idioma')->nullable();
            $table->string('profissao')->nullable();
            $table->string('cargo')->nullable();
            $table->string('cargo_dois')->nullable();
            $table->string('cargo_tres')->nullable();
            $table->string('interesse')->nullable();
            $table->string('interesse_dois')->nullable();
            $table->string('interesse_tres')->nullable();
            $table->boolean('trabalha_atualmente')->nullable();
            $table->decimal('pretensao_salarial_de', 10, 2)->nullable();
            $table->decimal('pretensao_salarial_ate', 10, 2)->nullable();
            $table->json('experiencia')->nullable();
            $table->json('cnh')->nullable();
            $table->longText('complementos')->nullable();
            $table->longText('habilidades')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_profiles');
    }
};
