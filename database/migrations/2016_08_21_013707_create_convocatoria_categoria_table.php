<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriaCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatoria_categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('convocatoria_id')->unsigned();
            $table->foreign('convocatoria_id')->references('id')->on('convocatorias')->onDelete('cascade');
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
        Schema::drop('convocatoria_categoria');
    }
}
