<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBuildsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('builds', function (Blueprint $table) {
            /**
            * Enable foreign key constraints on products. A product cannot be
            * deleted if a build exists which contains it.
            */
            $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::table('builds', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
            $table->dropForeign(['tow_id']);
            $table->dropForeign(['cpu_id']);
            $table->dropForeign(['gpu_id']);
            $table->dropForeign(['psu_id']);
            $table->dropForeign(['hdd_id']);
            $table->dropForeign(['ssd_id']);
            $table->dropForeign(['ram_id']);
        });
    }
}
