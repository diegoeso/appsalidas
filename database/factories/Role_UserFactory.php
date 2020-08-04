<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use App\Role_user;
use App\User;
use Faker\Generator as Faker;

$factory->define(Role_user::class, function (Faker $faker) {
    $auxes = User::all()->count();
    $auxrole = Role::all()->count();
    return [
        'user_id' => rand($min = 1, $max = $auxes),
        'role_id' => rand($min = 1, $max = $auxrole)
    ];
});
