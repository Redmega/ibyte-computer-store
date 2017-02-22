<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tow_id')->unsigned()->nullable();
            $table->integer('cpu_id')->unsigned()->nullable();
            $table->integer('gpu_id')->unsigned()->nullable();
            $table->integer('psu_id')->unsigned()->nullable();
            $table->integer('hdd_id')->unsigned()->nullable();
            $table->integer('ssd_id')->unsigned()->nullable();
            $table->integer('ram_id')->unsigned()->nullable();
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
        Schema::dropIfExists('builds');
    }

}
