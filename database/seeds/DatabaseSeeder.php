<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TestTableSeeder::class);
        $this->call(TestListSeeder::class);
        $this->call(StatusSeeder::class);
    }
}
