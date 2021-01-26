<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Model;
use App\payment;
use Faker\Generator as Faker;

$factory->define(payment::class, function (Faker $faker) {
    return [
        'CheckNum' =>$faker->word,
        'CustmerId' =>factory(Customer::class)->create()->id,
        'PaymentDate' =>$faker->dateTime,
        'Amount' =>$faker->numberBetween(0,20)
    ];
});
