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
      ['USER','PROC','ASSM','PACK','WAIT','SHIP','DONE','RETN']
    ),
    'payment_status' => $faker->boolean,
  ];
});
