<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    //
    protected $fillable = [
        'user_id',
        'cnpj',
        'nome_fantasia',
        'razao_social',
        'cep',
        'rua',
        'numero',
        'complemento',
        'estado',
        'cidade',
        'bairro',
        'whatsapp',
        'telefone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
