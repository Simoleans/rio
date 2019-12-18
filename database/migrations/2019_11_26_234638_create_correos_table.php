<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorreosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('correo1')->nullable();
            $table->string('correo2')->nullable();
            $table->string('correo3')->nullable();
            $table->string('correo4')->nullable();
            $table->string('jefatura');
            $table->string('telefono');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regiones');
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
        Schema::dropIfExists('correos');
    }
}
