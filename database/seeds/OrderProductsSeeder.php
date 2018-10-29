<?php

use App\Models\OrderProduct;
use Illuminate\Database\Seeder;

class OrderProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrderProduct::class, 5)->create();
    }
}
