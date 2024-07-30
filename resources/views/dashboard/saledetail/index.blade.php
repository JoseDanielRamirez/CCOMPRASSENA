@extends('dashboard.master')
@section('titulo','DetalleVenta')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Listado de  Detalle de Venta</h1>
    <br>
    <a href="{{url('dashboard/saledetail/create')}}" class="btn btn-primary btn-sm">Agregar Detalle de Venta</a>
    <table  class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID Detalle de Venta</th>
                <th>ID Venta</th>
                <th>ID de Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        @foreach($saledetail as $saledetail)
            <tr>
                <td scope="row">{{$saledetail->id}}</td>
                <td>{{$saledetail->sale_id}}</td>
                <td>{{$saledetail->article_id}}</td>
                <td>{{$saledetail->quantity}}</td>
                <td>{{$saledetail->price}}</td>
                <td>{{$saledetail->discount}}</td>
                <td>{{$saledetail->created_at}}</td>
                <td>{{$saledetail->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/saledetail/'.$saledetail->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/saledetail/'.$saledetail->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection 