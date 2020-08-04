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
    $programas = App\Program::all();
    return [
        'id_program' => rand(1, $programas->count()),
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->freeEmail,
        'emailu' => $faker->unique()->safeEmail,
        'document' => $faker->unique()->randomNumber(8),
        'document_type' => 1,
        'code' => $faker->unique()->randomNumber(7),
        'password' => bcrypt('1234'),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'birth' => $faker->dateTimeBetween($startDate = '-25 years', $endDate = '-20 years', $timezone = null),
        // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10)
    ];
});
