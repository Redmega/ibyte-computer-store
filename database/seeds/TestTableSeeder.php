<?php

use Illuminate\Database\Seeder;

use App\Models as Model;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Model\Test::class, 50)->create();
    }
}
