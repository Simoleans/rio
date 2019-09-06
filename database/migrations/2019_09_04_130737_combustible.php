<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Combustible extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combustible', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('arriendo_id');
          $table->foreign('arriendo_id')->references('id')->on('arriendo');
          $table->string('combustible_tanque')->nullable();
          $table->string('combustible_ob_tanque')->nullable();
          $table->string('combustible_medidor_nivel')->nullable();
          $table->string('combustible_ob_medidor_nivel')->nullable();
          $table->string('combustible_tapon')->nullable();
          $table->string('combustible_ob_tapon')->nullable();
          $table->string('combustible_fugas')->nullable();
          $table->string('combustible_ob_fugas')->nullable();
          $table->string('combustible_cebador')->nullable();
          $table->string('combustible_ob_cebador')->nullable();
          $table->string('combustible_filtro_primario')->nullable();
          $table->string('combustible_ob_filtro_primario')->nullable();
          $table->string('combustible_filtro_secundario')->nullable();
          $table->string('combustible_ob_filtro_secundario')->nullable();
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
        Schema::dropIfExists('combustible');
    }
}
