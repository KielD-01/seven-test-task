<?php

use App\Models\Order;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->pluck('id')->random(1)[0],
        'order_number' => $faker->md5
    ];
});
