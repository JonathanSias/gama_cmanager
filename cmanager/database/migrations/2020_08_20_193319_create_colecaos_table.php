<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColecaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colecaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('dimensao');
            $table->string('numero');
            $table->string('instituicao');
            $table->string('tuteladireta');
            $table->string('localizacao');
            $table->string('descricao');
            $table->string('relevancia');
            $table->string('utilizacao');
            // $table->string('conservacao');
            $table->string('observacoes');
            $table->string('bibliografia');
            // $table->string('descricao');
            // $table->string('codigoColecao');
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
        Schema::dropIfExists('colecaos');
    }
}
