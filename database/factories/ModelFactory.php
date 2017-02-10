<?php

use App\Models as Model;

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
$factory->define(Model\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Model\Test::class, function (Faker\Generator $faker) {
  return [
    'code' => $faker->randomNumber(4),
    'title' => $faker->sentence(4),
    'email' => $faker->safeEmail,
    'message' => $faker->text(500),
  ];
});

$factory->define(Model\TestList::class, function (Faker\Generator $faker) {
  return [
    'name' => $faker->name,
  ];
});
