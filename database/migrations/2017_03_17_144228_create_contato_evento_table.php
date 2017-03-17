<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('local');
            $table->string('termo_de_uso');
            $table->string('premiacao');
            $table->string('horario');
            $table->binary('imagem_baner');
            $table->string('estrutura');
            $table->string('etapa');
            $table->timestamp('data_abertura_inscricao');
            $table->timestamp('data_fechamento_inscricao');
            $table->timestamp('data_prova');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
