<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_paciente',200);
            $table->string('nome_mae', 200);
            $table->date('data_nascimento');
            $table->string('foto_paciente');
            $table->string('cpf')->unique();
            $table->timestamps();
        });
    }
}
