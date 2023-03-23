<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('cep');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento' )->nullable();
            $table->string('bairro');
            $table->string('localidade');
            $table->string('uf');
            $table->unsignedBigInteger('id_paciente');
            $table->timestamps();
        });

        Schema::table('enderecos', function (Blueprint $table) {
            $table->foreign('id_paciente')->references('id')->on('pacientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
