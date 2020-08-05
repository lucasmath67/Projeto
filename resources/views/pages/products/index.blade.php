@extends('adminlte::page')

@section('title', 'Produtos')


@section('content_header')

<h1>Lista de Produtos <a class="btn btn-dark" href="{{route('products.create')}}"><i class="fas fa-plus"></i></a></h1>

@stop

@section('content')
@include('includes.alerts')
    <div class="card">

        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th  width="210px"scope="col">Ação</th>
                  </tr>
                </thead>
                <tbody>

                      @foreach ($products as $product)
                      <tr>
                      <th>{{$product->id}}</th>
                      <td>{{$product->name}}</td>
                      <td>R$ {{$product->price}}</td>
                      <td   class=" container form-inline">
                     <a  style="margin:1px" class="col-sm" title="DELETAR" class="col-sm"><form  method="POST" action="{{route('products.destroy',$product->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                           <i class="fas fa-trash"></i>
                        </button>
                       </form>
                         </a>
                    <a style="margin:4px" title="EDITAR"  href="{{route('products.edit',$product->id)}}" class="btn btn-warning col-sm"><i class="fas fa-edit"></i></a>
                    <a  style="margin:4px" title="VER"  href="{{route('products.show',$product->id)}}" class="btn btn-info col-sm"><i class="fas fa-eye"></i></a>


                        </td>
                        </tr>
                      @endforeach



                </tbody>
              </table>

        </div>


        <div class="card-footer">

            {{ $products->links() }}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
