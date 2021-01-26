<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'City' =>$faker->word,
        'Phone' =>$faker->word,
        'Address1' =>$faker->word,
        'Address2' =>$faker->word,
        'State' =>$faker->word,
        'State' =>$faker->word,
        'Country' =>$faker->word,
        'PostalCode' =>$faker->randomNumber(),
        'Territory' =>$faker->word
    ];
});
