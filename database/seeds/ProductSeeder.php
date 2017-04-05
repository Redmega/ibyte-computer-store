<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(array(
           array('id'=>1,'stock_id'=>1,'name'=>'PHP Ninga','description'=>'This is some text','price'=>23.32, 'salePrice'=>124.32, 'type','ads',timestamps),
           array('id'=>2,'stock_id'=>2,'name'=>'CSS Ninga','description'=>'This is some text','price'=>345.32, 'salePrice'=>375.32, 'type','ads',timestamps),
           array('id'=>3,'stock_id'=>3,'name'=>'C++ Ninga','description'=>'This is some text','price'=>436.32, 'salePrice'=>53457.32, 'type','ads',timestamps),
           array('id'=>4,'stock_id'=>4,'name'=>'JS Ninga','description'=>'This is some text','price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps),

         ));
    }
}
