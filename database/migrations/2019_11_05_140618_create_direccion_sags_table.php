<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionSagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion_sags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('oficina');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regiones');
            $table->unsignedBigInteger('comuna_id');
            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('jefatura');
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
        Schema::dropIfExists('direccion_sags');
    }
}
