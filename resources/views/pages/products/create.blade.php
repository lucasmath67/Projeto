@extends('adminlte::page')

@section('title', 'Adicionar Produto')

@section('content_header')
    <h1>Adicionar Produto</h1>
@stop

@section('content')
@include('includes.alerts')
        <div class="card">
            <div class="card-body">
                <form action="{{route('products.store')}}" method="POST">

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
