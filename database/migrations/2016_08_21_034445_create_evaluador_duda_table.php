<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluadorDudaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluador_duda', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contactar');
            $table->boolean('aclarada');
            $table->integer('convocatoria_evaluador_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();

            $table->foreign('convocatoria_evaluador_id')->references('id')->on('convocatoria_evaluador')->onDelete('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
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
        Schema::drop('evaluador_duda');
    }
}
