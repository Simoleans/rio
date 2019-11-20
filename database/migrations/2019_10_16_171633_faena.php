<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Faena extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faena', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('productores_id');
            $table->foreign('productores_id')->references('id')->on('productores');
            $table->unsignedBigInteger('maquina_id');
            $table->foreign('maquina_id')->references('id')->on('maquina');
            $table->unsignedBigInteger('campo_id');
            $table->foreign('campo_id')->references('id')->on('campo');
            $table->string('desde');
            $table->string('hasta');
            $table->string('minimo_kg');
            $table->string('tipo_moneda');
            $table->string('tarifa_1');
            $table->string('tarifa_2');
            $table->string('flete');
            $table->string('petroleo');
            $table->string('tipo')->comment('origen/destino')->nullable();
            $table->string('status')->default(1)
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
        Schema::dropIfExists('faena');
    }
}
