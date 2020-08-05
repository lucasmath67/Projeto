<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $order;

    public function __construct(Order $order)
    {
            $this->order=$order;
    }

    public function index(){

            $orders=$this->order->with('client','products')->paginate();

            return view('pages.orders.index',compact('orders'));
    }


    public function getItens(Order $order){

        $products=$order->products()->get();

    return view('pages.orders.products.index',compact('order','products'));

    }



}
