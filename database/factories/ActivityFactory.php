<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3),
        'description' => $faker->text(100),
        'start_date' => $faker->dateTimeBetween($startDate = '-2 months', $endDate = '-1 weeks', $timezone = null),
        'end_date' => $faker->dateTimeBetween($startDate = '-2 months', $endDate = '-1 weeks', $timezone = null)
    ];
});
