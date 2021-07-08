<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->date('data_atendimento');
            $table->boolean('trabalho_altura');
            $table->boolean('espaco_confinado');
            $table->boolean('apto');
            $table->unsignedBigInteger('coordenador_id');
            $table->foreign('coordenador_id')->references('id')->on('coordenadores');
            $table->unsignedBigInteger('empregado_id');
            $table->foreign('empregado_id')->references('id')->on('empregados');
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setores');
            $table->unsignedBigInteger('funcao_id');
            $table->foreign('funcao_id')->references('id')->on('funcoes');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->unsignedBigInteger('tipo_atendimento_id');
            $table->foreign('tipo_atendimento_id')->references('id')->on('tipo_atendimentos');
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
        Schema::dropIfExists('atendimentos');
    }
}
