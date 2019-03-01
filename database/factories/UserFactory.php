<?php

use Faker\Generator as Faker;

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

$factory->define(App\Models\User::class, function (Faker $faker) {
	$date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$.HqMPlHWqVpY/sqxjS718.4KpYJbJ8lqbBnR4NqG3nmE.hsUra9wu', // secret
        'introduction' => $faker->sentence(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
