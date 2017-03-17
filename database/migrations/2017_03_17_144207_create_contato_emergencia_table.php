<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoEmergenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_emergencia', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_atleta')->unsigned();
            $table->foreign('id_atleta')->references('id')->on('atleta')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nome_emergencia');
            $table->string('telefone_de_emergencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contato_emergencia');
    }
}
