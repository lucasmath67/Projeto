@extends('adminlte::page')

@section('title', 'Lista de Pedidos')

@section('content_header')
    <h1>Pedidos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Status</th>
                        <th scope="col">Código do Cliente</th>
                        <th scope="col">Data de Criação</th>
                        <th scope="col">Produtos</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->status }}</td>
                            <td> {{ $order->client->id . ' - ' . $order->client->name }}</td>
                            <td> {{ $order->created_at }}</td>
                            <td>
                            <a class="btn btn-info" href="{{route('order.products',$order->id)}}">

                            <i class="fas fa-archive"></i>
                            </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

        <div class="card-footer">

            {{ $orders->links() }}

        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>


</script>



@stop
