<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        'firstname' => $faker->text(10),
        'lastname' => $faker->text(10),
        'issue' => $faker->text(10),
        'address' => $faker->text(50),
        'city' => $faker->text(10),
        'state' => $faker->text(10),
        'gender' => $faker->text(6),
        'description' => $faker->text(200),
        'image' => $faker->text(5),
    ];
});
