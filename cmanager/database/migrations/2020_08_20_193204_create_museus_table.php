<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuseusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('museus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep');
            $table->string('codigoMuseu');
            $table->string('telefone');
            $table->string('email');
            $table->string('horarios');
            $table->string('descricao', 2500);
            // $table->string('codigoMuseu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('museus');
    }
}
