<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('arriendo_id')->nullable();
            $table->foreign('arriendo_id')->references('id')->on('arriendo');
            $table->unsignedBigInteger('devolucion_id')->nullable();
            $table->foreign('devolucion_id')->references('id')->on('devoluciones');
            $table->string('limpieza_general')->nullable();
            $table->string('ob_limpieza_general')->nullable();
            $table->string('latas')->nullable();
            $table->string('ob_latas')->nullable();
            $table->string('mangueras')->nullable();
            $table->string('ob_mangueras')->nullable();
            $table->string('cableado_general')->nullable();
            $table->string('ob_cableado_general')->nullable();
            $table->string('paletas_resortes')->nullable();
            $table->string('ob_paletas_resortes')->nullable();
            $table->string('agitadores_palillos')->nullable();
            $table->string('ob_agitadores_palillos')->nullable();
            $table->string('rodamientos')->nullable();
            $table->string('ob_rodamientos')->nullable();
            $table->string('correas_poleas')->nullable();
            $table->string('ob_correas_poleas')->nullable();
            $table->string('cintas_bandas')->nullable();
            $table->string('ob_cintas_bandas')->nullable();
            $table->string('sopladores')->nullable();
            $table->string('ob_sopladores')->nullable();
            $table->string('piso_techo')->nullable();
            $table->string('ob_piso_techo')->nullable();
            $table->string('asiento')->nullable();
            $table->string('ob_asiento')->nullable();
            $table->string('palanca_mando')->nullable();
            $table->string('ob_palanca_mando')->nullable();
            $table->string('panel_interruptores')->nullable();
            $table->string('bateria')->nullable();
            $table->string('ob_bateria')->nullable();
            $table->string('interruptor_bateria')->nullable();
            $table->string('ob_interruptor_bateria')->nullable();
            $table->string('caja_fusibles')->nullable();
            $table->string('ob_caja_fusibles')->nullable();
            $table->string('sensores_inclinacion')->nullable();
            $table->string('ob_sensores_inclinacion')->nullable();
            $table->string('bocina')->nullable();
            $table->string('ob_bocina')->nullable();
            $table->string('bip_retroceso')->nullable();
            $table->string('iluminacion')->nullable();
            $table->string('ob_iluminacion')->nullable();
            $table->string('neumaticos_llantas')->nullable();
            $table->string('ob_neumaticos_llantas')->nullable();
            $table->string('motor_ruedas')->nullable();
            $table->string('ob_motor_ruedas')->nullable();
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
        Schema::dropIfExists('otros');
    }
}
