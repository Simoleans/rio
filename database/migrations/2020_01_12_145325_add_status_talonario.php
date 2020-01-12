<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusTalonario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talonarios', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1)->after('fin');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talonarios', function (Blueprint $table) {
             $table->dropColumn('status');
        });
    }
}
