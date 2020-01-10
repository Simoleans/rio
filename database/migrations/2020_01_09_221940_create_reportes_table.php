<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('faena_id')->nullable();
            $table->foreign('faena_id')->references('id')->on('faena');
            $table->unsignedBigInteger('fruta_id')->nullable();
            $table->foreign('fruta_id')->references('id')->on('frutas');
            $table->unsignedBigInteger('variedades_id')->nullable();
            $table->foreign('variedades_id')->references('id')->on('variedades');
            $table->string('fecha');
            $table->unsignedBigInteger('bandeja_id')->nullable();
            $table->foreign('bandeja_id')->references('id')->on('bandejas');
            $table->string('cantidad_bandeja');
            $table->string('kg');
            $table->string('cantidad_combustible');
            $table->string('hectareas');
            $table->string('observacion')->nullable();
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
        Schema::dropIfExists('reportes');
    }
}
