<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusMaquinaSags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maquina', function (Blueprint $table) {
            $table->tinyInteger('status_estacionamiento')->default(0)->after('status_maquina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maquina', function (Blueprint $table) {
             $table->dropColumn('status_estacionamiento');
        });
    }
}
