<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('idalumno');
            $table->String('nombre');
            $table->String('apellido');
            $table->String('curso');
            $table->integer('puntuacion');
            $table->integer('nivel');
            $table->foreign('idpregunta')->references('idpregunta')->on('preguntas');
            $table->foreign('idrespuesta')->references('idrespuesta')->on('respuestas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
