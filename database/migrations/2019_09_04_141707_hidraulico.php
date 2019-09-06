<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hidraulico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
        Schema::dropIfExists('hidraulico');
    }
}
