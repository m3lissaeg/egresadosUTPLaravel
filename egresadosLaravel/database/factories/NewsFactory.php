<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use App\Role;
use Faker\Generator as Faker;


$factory->define(News::class, function (Faker $faker) {

    // $administratorRole = Role::where('name', 'admin')->first();
    // ->roles()->attach($administratorRole)
    return [
        //
        'user_id'=> factory(App\User::class),
        'title'=>  $faker->sentence,
        'abst'=>  $faker->sentence,
        'body'=>  $faker->paragraph,
        'mediapath'=>  $faker->url,
    ];
});
