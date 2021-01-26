<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\order;
use App\order_product;
use App\Product;
use Faker\Generator as Faker;

$factory->define(order_product::class, function (Faker $faker) {
    return [
        'OrderID' =>factory(order::class)->create()->id,
        'ProductCode' =>factory(Product::class)->create()->Code,
        'Qty' =>$faker->randomNumber(),
        'PriceEach' =>$faker->numberBetween(0,20),
    ];
});
