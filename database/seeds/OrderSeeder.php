<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('orders')->insert(array(
            array('user_id'=>1,'status_id'=>1,'payment_status'=>true, timestamps),
            array('user_id'=>2,'status_id'=>2,'payment_status'=>true,timestamps),
            array('user_id'=>3,'status_id'=>3,'payment_status'=>false,timestamps),
            array('user_id'=>4,'status_id'=>4,'payment_status'=>true,timestamps),
            array('user_id'=>5,'status_id'=>5,'payment_status'=>false,timestamps),
         ));
    }
}
