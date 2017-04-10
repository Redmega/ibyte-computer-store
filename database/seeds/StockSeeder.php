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
           array('id'=>1,'quantity'=>42,timestamps),
           array('id'=>2,'quantity'=>35,timestamps),
           array('id'=>3,'quantity'=>60,timestamps),
           array('id'=>4,'quantity'=>44,timestamps),
           array('id'=>5,'quantity'=>33,timestamps),
           array('id'=>6,'quantity'=>40,timestamps),
           array('id'=>7,'quantity'=>17,timestamps),
           array('id'=>8,'quantity'=>21,timestamps),
           array('id'=>9,'quantity'=>54,timestamps),
           array('id'=>10,'quantity'=>44,timestamps),
           array('id'=>11,'quantity'=>31,timestamps),
           array('id'=>12,'quantity'=>41,timestamps),
           array('id'=>13,'quantity'=>24,timestamps),
           array('id'=>14,'quantity'=>33,timestamps),
           array('id'=>15,'quantity'=>35,timestamps),
           array('id'=>16,'quantity'=>24,timestamps),
           array('id'=>17,'quantity'=>38,timestamps),
           array('id'=>18,'quantity'=>42,timestamps),
           array('id'=>19,'quantity'=>23,timestamps),
           array('id'=>20,'quantity'=>31,timestamps),
           array('id'=>21,'quantity'=>42,timestamps),
         ));
    }
}
