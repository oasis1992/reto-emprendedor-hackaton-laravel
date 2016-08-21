<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosValoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_valores', function (Blueprint $table) {
            $table->increments('id');
            $table->text('valor_texto');
            $table->integer('valor_int');
            $table->text('valor_archivo');
            $table->integer('proyecto_id')->unsigned();
            $table->integer('seccion_campo_id')->unsigned();

            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('seccion_campo_id')->references('id')->on('seccion_campo')->onDelete('cascade');
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
        Schema::drop('proyecto_valores');
    }
}
