<?php

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stocks')->insert(array(
           array('id'=>1,'quantity'=>1,timestamps),
           array('id'=>2,'quantity'=>1,timestamps),
           array('id'=>3,'quantity'=>1,timestamps),
           array('id'=>4,'quantity'=>1,timestamps),
           array('id'=>5,'quantity'=>1,timestamps),

         ));
    }
}
