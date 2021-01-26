<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employee;
use App\Model;
use App\Office;
use Faker\Generator as Faker;

$factory->define(employee::class, function (Faker $faker) {
    return [
        'OfficeCode' =>factory(Office::class)->create()->Code,
        'ReportsTo' =>$faker->word,
        'LastName' =>$faker->word,
        'FirstName' =>$faker->word,
        'Extension' =>$faker->word,
        'Email' =>$faker->word,
        'JobTitle' =>$faker->word,
    ];
});
