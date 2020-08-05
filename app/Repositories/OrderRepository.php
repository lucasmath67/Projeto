<?php


namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Contracts\OrderRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderRepository implements OrderRepositoryInterface{
      public $STATUS="pending";
    protected $order;

    public function __construct(Order $order)
    {
            $this->order=$order;
    }
public function getOrders()
{

    return response()->json($this->order->where('client_id',auth()->user()->client->id)->get());
}
public function getOrder( $order){

    $order=$this->order->findOrFail($order);

    return response()->json($order);
}

public function deleteOrder($order){
    $order = $this->order->findOrFail($order)->delete();

    return response()->json(['message'=>'Pedido Excluido Com Sucesso']);
}

public function storeOrder($data){

    DB::beginTransaction();
    try{
        $dataForm = $data->all();
        $validator = validator($dataForm,$this->order->rules);
                
        if($validator->fails()){

            return response()->json(['error'=>$validator->errors()],400);
      }
        $order = $this->order->create([
         'status'=>$this->STATUS,
         'client_id'=>$dataForm['client_id'],
     ]);
        foreach($dataForm['products'] as $product ){
            $order->products()->attach($product['id']);
        }
        DB::commit();
    }
  catch(\Exception $e){
    DB::rollBack();
      return response()->json(['error'=>$e->getMessage()],$e->getCode());
  }

  return response()->json(['message'=>'Pedido Criado Com Sucesso'],201);

}
}
