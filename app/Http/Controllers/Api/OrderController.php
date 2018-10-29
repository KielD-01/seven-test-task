<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;

/**
 * Class OrderController
 * @package App\Http\Controllers\Api
 */
class OrderController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Returns list of orders
     *
     * @param OrderRepository $orderRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(OrderRepository $orderRepository)
    {
        $orders = $orderRepository->getOrders(true)->load('products');
        return $this->json(compact('orders'));
    }

}
