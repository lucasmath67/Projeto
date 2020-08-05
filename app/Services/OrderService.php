<?php

namespace App\Services;

use App\Repositories\Contracts\OrderRepositoryInterface;

class OrderService {

    protected $orderRepository;

public function __construct(OrderRepositoryInterface $orderRepository)
{
    $this->orderRepository =$orderRepository;
}
public function index(){

    return $this->orderRepository->getOrders();
}
public function show( $order){

    return $this->orderRepository->getOrder($order);
}
public function delete( $order){

    return $this->orderRepository->deleteOrder($order);
}
public function storeOrder($data){

    return $this->orderRepository->storeOrder($data);

}
}
