<?php

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(OrderProduct::class, function (Faker $faker) {
    return [
        'order_id' => Order::all()->pluck('id')->random(1)[0],
        'product_id' => Product::all()->pluck('id')->random(1)[0],
    ];
});
