<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoInscricaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricao', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('numero');
            $table->string('camiseta');
            $table->string('taxa_de_servico');
            $table->string('valor_total');
            $table->string('forma_de_pagamento');
            $table->timestamp('data_inscricao');
            $table->string('desconto');
            $table->integer('id_atleta')->unsigned();
            $table->foreign('id_atleta')->references('id')->on('atleta')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscricao');
    }
}
