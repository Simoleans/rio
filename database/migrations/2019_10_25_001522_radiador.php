<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Radiador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radiador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('arriendo_id');
            $table->foreign('arriendo_id')->references('id')->on('arriendo');
            $table->string('rad_portafiltro');
            $table->string('rad_ob_portafiltro');
            $table->string('rad_radiador');
            $table->string('rad_ob_radiador');
            $table->string('rad_ventilador');
            $table->string('rad_ob_ventilador');
            $table->string('rad_refrigerante_est');
            $table->string('rad_ob_refrigerante_est');
            $table->string('rad_refiregerante_niv');
            $table->string('rad_ob_refrigerante_niv');
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
        Schema::dropIfExists('radiador');
    }
}
