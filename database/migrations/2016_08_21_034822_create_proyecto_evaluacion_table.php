<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_metrica_id')->unsigned();
            $table->integer('proyecto_evaluador_id')->unsigned();
            $table->integer('porcentaje');

            $table->foreign('categoria_metrica_id')->references('id')->on('categoria_metrica')->onDelete('cascade');
            $table->foreign('proyecto_evaluador_id')->references('id')->on('proyecto_evaluador')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proyecto_evaluacion');
    }
}
