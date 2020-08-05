@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Produtos do Pedido</h1>
@stop

@section('content')
<div class="card">

    <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
              <tr>
                <td>  {{$product->name}}     </td>
                <td>  R${{$product->price}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
