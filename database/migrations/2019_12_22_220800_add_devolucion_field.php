<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDevolucionField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::disableForeignKeyConstraints();
            Schema::dropIfExists('combustible');
            Schema::dropIfExists('hidraulico');
            Schema::dropIfExists('aire');
            Schema::dropIfExists('radiador');
            Schema::dropIfExists('motor');
            Schema::enableForeignKeyConstraints();
       

        Schema::create('combustible', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('arriendo_id');
          $table->foreign('arriendo_id')->references('id')->on('arriendo');
          $table->unsignedBigInteger('devolucion_id')->nullable();
          $table->foreign('devolucion_id')->references('id')->on('devoluciones');
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

       

         Schema::create('motor', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->unsignedBigInteger('arriendo_id');
              $table->foreign('arriendo_id')->references('id')->on('arriendo');
              $table->unsignedBigInteger('devolucion_id')->nullable();
              $table->foreign('devolucion_id')->references('id')->on('devoluciones');
              $table->string('motor_fugas')->nullable();
              $table->string('motor_ob_fugas')->nullable();
              $table->string('motor_n_aceite')->nullable();
              $table->string('motor_ob_naceite')->nullable();
              $table->string('motor_e_aceite')->nullable();
              $table->string('motor_ob_eaceite')->nullable();
              $table->string('varilla_medir')->nullable();
              $table->string('motor_ob_varilla')->nullable();
              $table->string('motor_jcamaras')->nullable();
              $table->string('motor_ob_jcamaras')->nullable();
              $table->string('motor_jculata')->nullable();
              $table->string('motor_ob_jculata')->nullable();
              $table->string('motor_rciguenal')->nullable();
              $table->string('motor_ob_rciguenal')->nullable();
              $table->string('motor_tvalvulas')->nullable();
              $table->string('motor_ob_tvalvulas')->nullable();
              $table->string('motor_filtro')->nullable();
              $table->string('motor_ob_filtro')->nullable();
              $table->string('motor_filtro_primario')->nullable();
              $table->string('motor_ob_filtro_primario')->nullable();
            $table->timestamps();
        });

         Schema::create('hidraulico', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->unsignedBigInteger('arriendo_id');
              $table->foreign('arriendo_id')->references('id')->on('arriendo');
              $table->unsignedBigInteger('devolucion_id')->nullable();
              $table->foreign('devolucion_id')->references('id')->on('devoluciones');
              $table->string('hidraulico_bombas')->nullable();
              $table->string('hidraulico_ob_bombas')->nullable();
              $table->string('hidraulico_tanque')->nullable();
              $table->string('hidraulico_ob_tanque')->nullable();
              $table->string('hidraulico_nivel')->nullable();
              $table->string('hidraulico_ob_nivel')->nullable();
              $table->string('hidraulico_tapon')->nullable();
              $table->string('hidraulico_ob_tapon')->nullable();
              $table->string('hidraulico_visor')->nullable();
              $table->string('hidraulico_ob_visor')->nullable();
              $table->string('hidraulico_filtro_primario')->nullable();
              $table->string('hidraulico_ob_filtro_primario')->nullable();
              $table->string('hidraulico_filtro_secundario')->nullable();
              $table->string('hidraulico_ob_filtro_secundario')->nullable();
              $table->string('hidraulico_cilindros_fuga')->nullable();
              $table->string('hidraulico_ob_cilindros_fuga')->nullable();
              $table->string('hidraulico_cilindros_sellos')->nullable();
              $table->string('hidraulico_cilindros_ob_sellos')->nullable();
            $table->timestamps();
        });



          Schema::create('aire', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('arriendo_id');
            $table->foreign('arriendo_id')->references('id')->on('arriendo');
            $table->unsignedBigInteger('devolucion_id')->nullable();
            $table->foreign('devolucion_id')->references('id')->on('devoluciones');
            $table->string('air_filtro_sec');
            $table->string('air_ob_filtro_sec')->nullable();
            $table->string('air_filtro_pri');
            $table->string('air_ob_filtro_pri')->nullable();
            $table->string('air_portafiltro');
            $table->string('air_ob_portafiltro')->nullable();
            $table->timestamps();
        });

        Schema::create('radiador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('arriendo_id');
            $table->foreign('arriendo_id')->references('id')->on('arriendo');
            $table->unsignedBigInteger('devolucion_id')->nullable();
            $table->foreign('devolucion_id')->references('id')->on('devoluciones');
            $table->string('rad_portafiltro');
            $table->string('rad_ob_portafiltro')->nullable();
            $table->string('rad_radiador');
            $table->string('rad_ob_radiador')->nullable();
            $table->string('rad_ventilador');
            $table->string('rad_ob_ventilador')->nullable();
            $table->string('rad_refrigerante_est');
            $table->string('rad_ob_refrigerante_est')->nullable();
            $table->string('rad_refiregerante_niv');
            $table->string('rad_ob_refrigerante_niv')->nullable();
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
         Schema::disableForeignKeyConstraints();
            Schema::dropIfExists('combustible');
            Schema::dropIfExists('hidraulico');
            Schema::dropIfExists('aire');
            Schema::dropIfExists('radiador');
            Schema::dropIfExists('motor');

         Schema::enableForeignKeyConstraints();

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

       

         Schema::create('motor', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->unsignedBigInteger('arriendo_id');
              $table->foreign('arriendo_id')->references('id')->on('arriendo');
             
              $table->string('motor_fugas')->nullable();
              $table->string('motor_ob_fugas')->nullable();
              $table->string('motor_n_aceite')->nullable();
              $table->string('motor_ob_naceite')->nullable();
              $table->string('motor_e_aceite')->nullable();
              $table->string('motor_ob_eaceite')->nullable();
              $table->string('varilla_medir')->nullable();
              $table->string('motor_ob_varilla')->nullable();
              $table->string('motor_jcamaras')->nullable();
              $table->string('motor_ob_jcamaras')->nullable();
              $table->string('motor_jculata')->nullable();
              $table->string('motor_ob_jculata')->nullable();
              $table->string('motor_rciguenal')->nullable();
              $table->string('motor_ob_rciguenal')->nullable();
              $table->string('motor_tvalvulas')->nullable();
              $table->string('motor_ob_tvalvulas')->nullable();
              $table->string('motor_filtro')->nullable();
              $table->string('motor_ob_filtro')->nullable();
              $table->string('motor_filtro_primario')->nullable();
              $table->string('motor_ob_filtro_primario')->nullable();
            $table->timestamps();
        });

         Schema::create('hidraulico', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->unsignedBigInteger('arriendo_id');
              $table->foreign('arriendo_id')->references('id')->on('arriendo');
              
              $table->string('hidraulico_bombas')->nullable();
              $table->string('hidraulico_ob_bombas')->nullable();
              $table->string('hidraulico_tanque')->nullable();
              $table->string('hidraulico_ob_tanque')->nullable();
              $table->string('hidraulico_nivel')->nullable();
              $table->string('hidraulico_ob_nivel')->nullable();
              $table->string('hidraulico_tapon')->nullable();
              $table->string('hidraulico_ob_tapon')->nullable();
              $table->string('hidraulico_visor')->nullable();
              $table->string('hidraulico_ob_visor')->nullable();
              $table->string('hidraulico_filtro_primario')->nullable();
              $table->string('hidraulico_ob_filtro_primario')->nullable();
              $table->string('hidraulico_filtro_secundario')->nullable();
              $table->string('hidraulico_ob_filtro_secundario')->nullable();
              $table->string('hidraulico_cilindros_fuga')->nullable();
              $table->string('hidraulico_ob_cilindros_fuga')->nullable();
              $table->string('hidraulico_cilindros_sellos')->nullable();
              $table->string('hidraulico_cilindros_ob_sellos')->nullable();
            $table->timestamps();
        });



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

        Schema::create('radiador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('arriendo_id');
            $table->foreign('arriendo_id')->references('id')->on('arriendo');
           
            $table->string('rad_portafiltro');
            $table->string('rad_ob_portafiltro')->nullable();
            $table->string('rad_radiador');
            $table->string('rad_ob_radiador')->nullable();
            $table->string('rad_ventilador');
            $table->string('rad_ob_ventilador')->nullable();
            $table->string('rad_refrigerante_est');
            $table->string('rad_ob_refrigerante_est')->nullable();
            $table->string('rad_refiregerante_niv');
            $table->string('rad_ob_refrigerante_niv')->nullable();
            $table->timestamps();
        });
    }
}
