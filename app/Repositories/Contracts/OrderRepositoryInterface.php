<?php


namespace App\Repositories\Contracts;


interface OrderRepositoryInterface {
public function getOrders();
public function getOrder( $order);
public function deleteOrder($order);
public function storeOrder($data);
}
