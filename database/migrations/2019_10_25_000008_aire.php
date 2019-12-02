<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aire', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('arriendo_id');
            $table->foreign('arriendo_id')->references('id')->on('arriendo');
            $table->string('air_filtro_sec');
            $table->string('air_ob_filtro_sec')->nullable();
            $table->string('air_filtro_pri');
            $table->string('air_ob_filtro_pri')->nullable();
            $table->string('air_portafiltro');
            $table->string('air_ob_portafiltro')->nullable();
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
        Schema::dropIfExists('aire');
    }
}
