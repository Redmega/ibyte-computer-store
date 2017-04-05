<?php

use App\Models\User;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    factory(User::class, 50)->create()->each(function($u) {
      $u->addresses()->save(factory(Address::class)->make([
        'type' => 'shipping',
        ]));
        $u->orders()->save(factory(Order::class)->make());
      });
      factory(User::class)->create([
        'email'=>'admin@example.com',
        'first_name'=>'Admin',
        'last_name'=>'Admin',
        'password'=>Hash::make("password"),
        'admin'=>true
      ]);
    }
  }
