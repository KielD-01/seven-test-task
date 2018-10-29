<?php

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(2, 5)),
        'description' => $faker->sentence(rand(100, 250), true)
    ];
});
