<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->name,
        'birthDate' => $faker->dateTimeBetween('-90 years', '-10 years'),
        'email'  =>  $faker->email,
    ];
});
