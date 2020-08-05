@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Lista de Clientes</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
              </tr>
            </thead>
            <tbody>

            <tr>
                @foreach ($clients as $client)

              <th scope="row">{{$client->id}}</th>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->telephone}}</td>
                <td>{{$client->address}}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

  <div class="card-footer">

    {{ $clients->links() }}

</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
