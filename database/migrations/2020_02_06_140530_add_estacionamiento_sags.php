<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstacionamientoSags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        //Schema::dropIfExists('users');
        Schema::enableForeignKeyConstraints();

        Schema::table('sags', function (Blueprint $table) {
            $table->unsignedBigInteger('estacionamiento_id')->nullable()->after('id');
            $table->foreign('estacionamiento_id')->references('id')->on('estacionamientos');
            $table->tinyInteger('status')->default(1)->after('hora_dest');
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

        //Schema::enableForeignKeyConstraints();

        Schema::table('sags', function (Blueprint $table) {
            $table->dropForeign('sags_estacionamiento_id_foreign');
             $table->dropColumn('estacionamiento_id');
            $table->dropColumn('status');
        });
    }
}
