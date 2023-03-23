<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    protected $fillable = [
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'localidade',
        'uf',
        'id_paciente'
    ];

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'id_paciente');
    }
}
