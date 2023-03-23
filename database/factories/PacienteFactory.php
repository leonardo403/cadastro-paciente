<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

//$factory->define(Model::class, function (Faker $faker) {
    public function definition ()
    {
    return [
        'nome_paciente' =>  $faker->name,
        'nome_mae' => $faker->name,
        'data_nascimento' => $faker->dateTimeBetween('1986-01-01', '2001-12-31')->format('d/mY'),
        'foto_paciente' => $faker->image('images', 400,300),
        'cpf' => $faker->cpf
    ];
}
