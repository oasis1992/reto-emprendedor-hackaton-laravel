<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('calif_aprovatoria');
            $table->integer('evaluador_proyecto');
            $table->integer('organizacion_id')->unsigned();
            $table->foreign('organizacion_id')->references('id')->on('organizaciones')->onDelete('cascade');
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
        Schema::drop('convocatorias');
    }
}
