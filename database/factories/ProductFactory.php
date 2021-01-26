<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use App\ProductLine;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'ProductLineId' =>factory(ProductLine::class)->create()->id,
        'name' =>$faker->word,
        'Scale' =>$faker ->randomNumber(),
        'vendor' =>$faker ->word,
        'PdtDescription' =>$faker ->word,
        'QtylnStock' =>$faker ->randomNumber(),
        'BuyPrice' =>$faker ->numberBetween(0,20),
        'MSRP' =>$faker ->word
    ];
});
