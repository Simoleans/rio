<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Motor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->unsignedBigInteger('arriendo_id');
              $table->foreign('arriendo_id')->references('id')->on('arriendo');
              $table->string('motor_fugas',)->nullable();
              $table->string('motor_ob_fugas',)->nullable();
              $table->string('motor_n_aceite',)->nullable();
              $table->string('motor_ob_naceite',)->nullable();
              $table->string('motor_e_aceite',)->nullable();
              $table->string('motor_ob_eaceite',)->nullable();
              $table->string('varilla_medir',)->nullable();
              $table->string('motor_ob_varilla',)->nullable();
              $table->string('motor_jcamaras',)->nullable();
              $table->string('motor_ob_jcamaras',)->nullable();
              $table->string('motor_jculata',)->nullable();
              $table->string('motor_ob_jculata',)->nullable();
              $table->string('motor_rciguenal',)->nullable();
              $table->string('motor_ob_rciguenal',)->nullable();
              $table->string('motor_tvalvulas',)->nullable();
              $table->string('motor_ob_tvalvulas',)->nullable();
              $table->string('motor_filtro',)->nullable();
              $table->string('motor_ob_filtro',)->nullable();
              $table->string('motor_filtro_primario',)->nullable();
              $table->string('motor_ob_filtro_primario',)->nullable();
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
        Schema::dropIfExists('motor');
    }
}
