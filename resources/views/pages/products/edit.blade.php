@extends('adminlte::page')

@section('title', "Editar Produto {$product->name}")

@section('content_header')
<h1>Editar Produto {{$product->name}}</h1>
@stop

@section('content')
@include('includes.alerts')
        <div class="card">

            <div class="card-body">
                <form action="{{route('products.update',$product->id)}}" method="POST">
                    @method('PUT')
                    @include('pages.products._partials.form')
                  </form>
            </div>
        </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
