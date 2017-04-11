<?php

use App\Models as Models;

use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Models\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make(str_random(8)),
        'remember_token' => null,
    ];
});

$factory->defineAs(Models\User::class, 'admin', function ($faker) use ($factory) {
    $user = $factory->raw(Models\User::class);

    return array_merge($user, ['admin' => true]);
});

$factory->define(Models\Address::class, function (Faker\Generator $faker) {
  return [
    'street' => $faker->buildingNumber . ' ' . $faker->streetName,
    'unit' => $faker->secondaryAddress,
    'city' => $faker->city,
    'state' => $faker->stateAbbr,
    'zipcode' => $faker->postcode,
    'country' => 'USA',
  ];
});

$factory->define(Models\Order::class, function (Faker\Generator $faker) {
  return [
    'status_code' => $faker->randomElement(
      ['PROC','ASSM','PACK','WAIT','SHIP','DONE','RETN']
    ),
    'payment_status' => $faker->boolean,
  ];
});

$factory->define(Models\Build::class, function (Faker\Generator $faker) {
  return [
    'tow_id' => $faker->randomElement(Models\Product::where('type', 'TOW')->get()->all())->id,
    'cpu_id' => $faker->randomElement(Models\Product::where('type', 'CPU')->get()->all())->id,
    'gpu_id' => $faker->randomElement(Models\Product::where('type', 'GPU')->get()->all())->id,
    'psu_id' => $faker->randomElement(Models\Product::where('type', 'PSU')->get()->all())->id,
    'hdd_id' => $faker->randomElement(Models\Product::where('type', 'HDD')->get()->all())->id,
    'ssd_id' => $faker->randomElement(Models\Product::where('type', 'SSD')->get()->all())->id,
    'ram_id' => $faker->randomElement(Models\Product::where('type', 'RAM')->get()->all())->id,
  ];
});
