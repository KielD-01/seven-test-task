<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 29.10.18
 * Time: 20:05
 */

namespace App\Repositories;


use App\Models\Order;

/**
 * Class OrderRepository
 * @package App\Repositories
 */
class OrderRepository
{

    /**
     * @param bool $all
     * @param int $limit
     * @return Order[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getOrders($all = false, $limit = 10)
    {
        return $all ? Order::all() : Order::paginate($limit)->get();
    }
}
