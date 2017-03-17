<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoDadosComplementaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_complementares', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
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
        Schema::dropIfExists('dados_complementares');
    }
}
