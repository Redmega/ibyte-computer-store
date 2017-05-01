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
           array('id'=>1,'product_id' => 1,'quantity'=>42),
           array('id'=>2,'product_id' => 2,'quantity'=>35),
           array('id'=>3,'product_id' => 3,'quantity'=>60),
           array('id'=>4,'product_id' => 4,'quantity'=>44),
           array('id'=>5,'product_id' => 5,'quantity'=>33),
           array('id'=>6,'product_id' => 6,'quantity'=>40),
           array('id'=>7,'product_id' => 7,'quantity'=>17),
           array('id'=>8,'product_id' => 8,'quantity'=>21),
           array('id'=>9,'product_id' => 9,'quantity'=>54),
           array('id'=>10,'product_id' => 10,'quantity'=>44),
           array('id'=>11,'product_id' => 11,'quantity'=>31),
           array('id'=>12,'product_id' => 12,'quantity'=>41),
           array('id'=>13,'product_id' => 13,'quantity'=>24),
           array('id'=>14,'product_id' => 14,'quantity'=>33),
           array('id'=>15,'product_id' => 15,'quantity'=>35),
           array('id'=>16,'product_id' => 16,'quantity'=>24),
           array('id'=>17,'product_id' => 17,'quantity'=>38),
           array('id'=>18,'product_id' => 18,'quantity'=>42),
           array('id'=>19,'product_id' => 19,'quantity'=>23),
           array('id'=>20,'product_id' => 20,'quantity'=>31),
           array('id'=>21,'product_id' => 21,'quantity'=>42),
         ));
    }
}
