<?php

use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StockSeeder::class);
        $this->call(UserSeeder::class);
    }
}
