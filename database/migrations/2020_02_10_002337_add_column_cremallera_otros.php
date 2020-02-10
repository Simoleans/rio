<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCremalleraOtros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('otros', function (Blueprint $table) {
            $table->string('cremallera_direccion')->after('ob_motor_ruedas');
            $table->string('ob_cremallera_direccion')->after('cremallera_direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('otros', function (Blueprint $table) {
            $table->dropColumn(['cremallera_direccion','ob_cremallera_direccion']);
        });
    }
}
