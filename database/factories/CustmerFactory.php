<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\employee;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'SalesRepEmployeeNum' =>factory(employee::class)->create()->id,
        'Name' =>$faker->word,
        'LastName' =>$faker->word,
        'FirsName' =>$faker->word,
        'Phone' =>$faker->word,
        'Address1' =>$faker->word,
        'Address2' =>$faker->word,
        'City' =>$faker->word,
        'State' =>$faker->word,
        'PostalCode' =>$faker->numberBetween(0,20),
        'CreditLimit' =>$faker->numberBetween(0,20)
    ];
});
