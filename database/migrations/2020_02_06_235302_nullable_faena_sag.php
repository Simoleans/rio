<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullableFaenaSag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sags', function (Blueprint $table) {
           $table->unsignedBigInteger('faena_ori_id')->nullable()->change();
            $table->unsignedBigInteger('faena_dest_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sags', function (Blueprint $table) {
            $table->string('faena_dest_id')->change();
            $table->string('faena_ori_id')->change();
        });
    }
}
