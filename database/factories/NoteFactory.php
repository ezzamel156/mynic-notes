<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'description' => $faker->sentence(4),
        'user_id' => factory(App\User::class)
    ];
});
