<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_integrantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email')->unique();

            $table->integer('proyecto_id')->unsigned();
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
        Schema::drop('proyecto_valores');
    }
}
