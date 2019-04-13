<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votan', function (Blueprint $table) {
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');
            $table->foreign('idpropuesta')->references('idpropuesta')->on('propuestas');
            $table->boolean('voto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votan');
    }
}
