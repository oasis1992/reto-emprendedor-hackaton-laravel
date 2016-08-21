<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionCampoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_campo', function (Blueprint $table) {
            $table->increments('id');
            $table->text('texto');
            $table->text('list_values');
            $table->boolean('requerido');
            $table->integer('campo_tipo_id')->unsigned();
            $table->integer('convocatoria_seccion_id')->unsigned();

            $table->foreign('campo_tipo_id')->references('id')->on('campo_tipo')->onDelete('cascade');
            $table->foreign('convocatoria_seccion_id')->references('id')->on('convocatoria_seccion')->onDelete('cascade');
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
        Schema::drop('seccion_campo');
    }
}
