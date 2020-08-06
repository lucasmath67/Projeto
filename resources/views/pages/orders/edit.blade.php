@extends('adminlte::page')

@section('title', "Editar Status do Pedido {$order->id}")

@section('content_header')
<h1>Editar status do pedido {{$order->id}}</h1>
@stop

@section('content')
<div class="card">
    @include('includes.alerts')
    <div class="card-body">

    <form action="{{route('order.update',$order->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label  for="exampleFormControlSelect1">Escolha o Status</label>
                <select  name="status" class="form-control">
                  <option value="pending" >Pendente</option>
                  <option value="in_preparation">Em preparo</option>
                  <option value="on_delivery">Em entrega</option>
                  <option value="delivered">Entregue</option>
                  <option value="canceled">Cancelado</option>
                </select>
              </div>
              <button type="submit" class="btn btn-success">Alterar</button>
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
