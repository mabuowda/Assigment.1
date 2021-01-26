<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\ProductLine;
use Faker\Generator as Faker;

$factory->define(ProductLine::class, function (Faker $faker) {
    return [
        'DescInText' =>$faker->word,
        'DescInHTML' =>$faker->word,
        'image' =>$faker->word
    ];
});
