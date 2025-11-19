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
        Schema::create('table_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_profile_id')->nullable()->constrained('company_profiles')->nullOnDelete();
            $table->string('titulo')->nullable();
            $table->string('area')->nullable();
            $table->json('tipo')->nullable();
            $table->string('experiencia')->nullable();
            $table->longText('descricao')->nullable();
            $table->json('requisitos')->nullable();
            $table->longText('desejavel')->nullable();
            $table->longText('responsabilidade')->nullable();
            $table->longText('adicionais')->nullable();
            $table->longText('beneficios')->nullable();
            $table->string('escolaridade')->nullable();
            $table->string('escolaridade_situacao')->nullable();
            $table->decimal('faixa_salarial_de', 10, 2)->nullable();
            $table->decimal('faixa_salarial_ate', 10, 2)->nullable();
            $table->boolean('faixa_salarial_a_combinar')->nullable();
            $table->json('cnh')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->longText('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
