<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->firstName,
        'birthDate' => $faker->dateTimeBetween('-20 years', 'now'),
        'color'  =>  $faker->safeColorName,
        'person_id'  =>  $faker->numberBetween(1,100),
    ];
});
