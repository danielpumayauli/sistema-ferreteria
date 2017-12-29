<?php

use Faker\Generator as Faker;
use App\Provider;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->word),
        'address' => $faker->address,
        'description' => $faker->sentence(15),
        'telephone' => $faker->e164PhoneNumber
    ];
});
