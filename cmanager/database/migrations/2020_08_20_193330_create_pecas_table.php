<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pecas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('instituicao');
            $table->string('numeroinventario');
            $table->string('outrosnumeros');
            $table->date('data');
            $table->string('epoca');
            // $table->string('colecao');
            $table->string('titulo');
            $table->string('material');
            $table->string('tecnica');
            $table->string('autoria');
            $table->string('altura');
            $table->string('largura');
            $table->string('comprimento');
            $table->string('procedencia');
            $table->string('doador');
            $table->string('localdeproducao');
            $table->string('descricao');
            $table->string('estadodeconservacao');
            $table->string('circulacaocondicao');
            $table->string('localizacao');
            $table->string('situacao');
            $table->string('inscricao');
            $table->string('referencianoacervo');
            $table->string('classificacao');
            $table->string('observacoes');
            $table->string('recebidopor');
            $table->string('preenchidopor');
            $table->date('datadepreenchimento');
            $table->string('revisadopor');
            $table->date('dataderevisao');
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
        Schema::dropIfExists('pecas');
    }
}
