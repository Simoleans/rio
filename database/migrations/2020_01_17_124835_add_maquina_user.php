<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaquinaUser extends Migration
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

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('maquina_id')->nullable()->after('id');
            $table->foreign('maquina_id')->references('id')->on('maquina');
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
       // Schema::dropIfExists('users');
        Schema::enableForeignKeyConstraints();

        Schema::table('users', function (Blueprint $table) {
            
            $table->dropForeign('users_maquina_id_foreign')->references('id')->on('maquina');
            $table->dropColumn('maquina_id');
        });
    }
}
