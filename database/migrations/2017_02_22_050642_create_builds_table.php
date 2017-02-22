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

            /**
            * Enable foreign key constraints on products. A product cannot be
            * deleted if a build exists which contains it.
            */
            $table->foreign('tow_id')->references('id')->on('products');
            $table->foreign('cpu_id')->references('id')->on('products');
            $table->foreign('gpu_id')->references('id')->on('products');
            $table->foreign('psu_id')->references('id')->on('products');
            $table->foreign('hdd_id')->references('id')->on('products');
            $table->foreign('ssd_id')->references('id')->on('products');
            $table->foreign('ram_id')->references('id')->on('products');
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
