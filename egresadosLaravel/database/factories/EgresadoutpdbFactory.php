<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Egresadosutpdb;
use Faker\Generator as Faker;

$factory->define(Egresadosutpdb::class, function (Faker $faker) {

    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'dni' => $faker->ssn,
        'email' => $faker->unique()->safeEmail,
    ];
});