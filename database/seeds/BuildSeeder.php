<?php

use Illuminate\Database\Seeder;

class BuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table(builds)->insert(array(
          array('id'=> 10, 'order_id'=>1,'tow_id'=>1,'cpu_id'=>1,'gpu_id'=>1,'psu_id'=>1,'hdd_id'=>1,'ssd_id'=>1,'ram_id'=>1, timestamps),
          array('id'=> 12, 'order_id'=>2,'tow_id'=>2,'cpu_id'=>2,'gpu_id'=>2,'psu_id'=>2,'hdd_id'=>2,'ssd_id'=>2,'ram_id'=>2, timestamps),
          array('id'=> 14, 'order_id'=>3,'tow_id'=>3,'cpu_id'=>3,'gpu_id'=>3,'psu_id'=>3,'hdd_id'=>3,'ssd_id'=>3,'ram_id'=>3, timestamps),
          array('id'=> 16, 'order_id'=>4,'tow_id'=>4,'cpu_id'=>4,'gpu_id'=>4,'psu_id'=>4,'hdd_id'=>4,'ssd_id'=>4,'ram_id'=>4, timestamps),
        ));
    }
}
