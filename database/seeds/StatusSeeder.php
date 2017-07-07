<?php

use Illuminate\Database\Seeder;

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
            ['order' => '0',
            'code' => 'USER',
            'name' => 'Choosing',
            'description'=> 'The order is not yet created.'],
            ['order' => '1',
            'code' => 'PROC',
            'name' => 'Processing',
            'description' => 'The order is being processed and parts are being gathered.'],
            ['order' => '2',
            'code'=> 'ASSM',
            'name' => 'Assembling',
            'description' => 'The computer is being assembled by our expert team.'],
            ['order' => '3',
            'code'=>'PACK',
            'name' => 'Packaging',
            'description' => 'The computer is being packaged for safe delivery.'],
            ['order' => '4',
            'code'=>'WAIT',
            'name' => 'Awaiting Shipment',
            'description' => 'The package is waiting for the driver to take it to the shipping point.'],
            ['order' => '5',
            'code'=>'SHIP',
            'name' => 'Shipped',
            'description' => 'The package has been given over to the shipping company'],
            ['order' => '6',
            'code'=>'DONE',
            'name' => 'Delivered',
            'description' => 'The package has been delivered.'],
            ['order' => '7',
            'code'=>'RETN',
            'name' => 'Returned',
            'description' => 'The package was unable to be delivered. It was returned to the iByte warehouse.'],
        ]);
    }
}
