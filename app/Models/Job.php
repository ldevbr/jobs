<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'table_jobs';
    //
    protected $fillable = [
        'company_profile_id',
        'titulo',
        'area',
        'tipo',
        'experiencia',
        'descricao',
        'requisitos',
        'desejavel',
        'responsabilidade',
        'adicionais',
        'beneficios',
        'escolaridade',
        'escolaridade_situacao',
        'faixa_salarial_de',
        'faixa_salarial_ate',
        'faixa_salarial_a_combinar',
        'cnh',
        'estado',
        'cidade',
        'bairro',
        'observacao',
    ];

    public function companyProfile()
    {
        return $this->belongsTo(CompanyProfile::class);
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
