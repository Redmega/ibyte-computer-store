<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            ['code' => 'PROC',
            'name' => 'Processing',
            'description' => 'The order is being processed and parts are being gathered.'],
            ['code'=> 'ASSM',
            'name' => 'Assembling',
            'description' => 'The computer is being assembled by our expert team.'],
            ['code'=>'PACK',
            'name' => 'Packaging',
            'description' => 'The computer is being packaged for safe delivery.'],
            ['code'=>'WAIT',
            'name' => 'Awaiting Shipment',
            'description' => 'The package is waiting for the driver to take it to the shipping point.'],
            ['code'=>'SHIP',
            'name' => 'Shipped',
            'description' => 'The package has been given over to the shipping company'],
            ['code'=>'DONE',
            'name' => 'Delivered',
            'description' => 'The package has been delivered.'],
            ['code'=>'RETN',
            'name' => 'Returned',
            'description' => 'The package was unable to be delivered. It was returned to the iByte warehouse.'],
        ]);
    }
}
