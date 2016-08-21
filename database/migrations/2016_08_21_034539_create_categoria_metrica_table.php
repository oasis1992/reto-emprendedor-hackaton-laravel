<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaMetricaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_metrica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('porcentaje');
            $table->integer('convocatoria_categoria_id')->unsigned();

            $table->foreign('convocatoria_categoria_id')->references('id')->on('convocatoria_categoria')->onDelete('cascade');
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
        Schema::drop('categoria_metrica');
    }
}
