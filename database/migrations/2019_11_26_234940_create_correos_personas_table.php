<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorreosPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correos_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('correos_id');
            $table->foreign('correos_id')->references('id')->on('correos');
            $table->unsignedBigInteger('comunas_id');
            $table->foreign('comunas_id')->references('id')->on('comunas');
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
        Schema::dropIfExists('correos_personas');
    }
}
