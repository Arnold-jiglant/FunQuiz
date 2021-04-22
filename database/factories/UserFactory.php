<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->firstName,
        'email' => $faker->unique()->safeEmail,
        'phone' => '0644' . $faker->unique()->biasedNumberBetween(100000, 999999),
        'verified_at' => now(),
        'password' => bcrypt('123'), // password
        'remember_token' => '', // password
        'role_id' => rand(1, 2),
        'status' => 1,
    ];
});
