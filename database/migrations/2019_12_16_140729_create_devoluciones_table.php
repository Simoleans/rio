<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devoluciones', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('arriendo_id');
            $table->foreign('arriendo_id')->references('id')->on('arriendo');
            $table->unsignedBigInteger('maquina_id');
            $table->foreign('maquina_id')->references('id')->on('maquina');
            $table->string('horas')->nullable();
            $table->string('status',1)->default(1);
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
        Schema::dropIfExists('devoluciones');
    }
}
