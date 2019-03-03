<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaoOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questao_opcoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questao_enunciado_id');
            $table->mediumText('opcao_enunciado');
            $table->string('opcao_letra');
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
        Schema::dropIfExists('questao_opcoes');
    }
}
