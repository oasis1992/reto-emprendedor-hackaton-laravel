<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoEvaluadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_evaluador', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proyecto_id')->unsigned();
            $table->integer('convocatoria_evaluador_id')->unsigned();
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('convocatoria_evaluador_id')->references('id')->on('convocatoria_evaluador')->onDelete('cascade');
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
        Schema::drop('proyecto_evaluador');
    }
}
