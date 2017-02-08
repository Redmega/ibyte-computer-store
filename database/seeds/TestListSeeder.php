<?php

use Illuminate\Database\Seeder;
use App\Models as Model;

class TestListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Model\TestList::class, 50)->create();
    }
}
