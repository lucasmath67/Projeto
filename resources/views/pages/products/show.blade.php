@extends('adminlte::page')

@section('title', "Produto: {$product->name}")

@section('content_header')
<h1>Produto: {{$product->name}}</h1>
@stop

@section('content')
<div class="card">

    <div class="card-body">
        <ul>
            <li> <strong>ID:</strong>      {{$product->id}}      </li>
            <li> <strong>Nome:</strong>      {{$product->name}}      </li>
            <li> <strong>Preço:</strong>   R${{$product->price}}     </li>
            </ul>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
