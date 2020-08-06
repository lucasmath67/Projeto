<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderEditRequest;
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


    public function edit(Order $order){

        return view('pages.orders.edit',compact('order'));
    }

    public function update ( Order $order ,OrderEditRequest $request){
          $order = $order->update(['status'=>$request->status]);
            if($order){

                return redirect()->route('orders.index')->with(['success'=>"Status Atualizado Com Sucesso"]);
            }
            return redirect()->back();
    }

}
