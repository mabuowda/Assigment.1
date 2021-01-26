<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Model;
use App\order;
use Faker\Generator as Faker;

$factory->define(order::class, function (Faker $faker) {
    return [
        'CustmerID' =>factory(Customer::class)->create()->id,
        'OrderDate' =>$faker ->dateTime,
        'RequireDate' =>$faker ->dateTime,
        'ShippedDate' =>$faker ->dateTime,
        'Status' =>$faker ->randomNumber(),
        'Comments' =>$faker ->word,
    ];
});
