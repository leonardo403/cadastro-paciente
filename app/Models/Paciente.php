<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    protected $fillable = [
        'nome_paciente',
        'nome_mae',
        'data_nascimento',
        'foto_paciente',
        'cpf'
    ];
}
