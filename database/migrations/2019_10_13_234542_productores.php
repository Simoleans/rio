<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('rut');
            $table->string('r_social');
            $table->string('localidad');
             $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regiones');

            $table->unsignedBigInteger('comuna_id');
            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->string('direccion');
            $table->string('contacto_responsable');
            $table->string('correo');
            $table->string('telefono');
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
        Schema::dropIfExists('productores');
    }
}
