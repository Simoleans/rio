<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('maquina_id');
            $table->foreign('maquina_id')->references('id')->on('maquina');
            $table->unsignedBigInteger('faena_ori_id');
            $table->foreign('faena_ori_id')->references('id')->on('faena');
            $table->string('hora_ori');
            $table->unsignedBigInteger('faena_dest_id');
            $table->foreign('faena_dest_id')->references('id')->on('faena');
            $table->string('hora_dest');
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
        Schema::dropIfExists('sags');
    }
}
