@extends('dashboard.master')
@section('titulo','Venta')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Listado de venta</h1>
    <br>
    <a href="{{url('dashboard/sale/create')}}" class="btn btn-primary btn-sm">Nueva venta</a>
    <table  class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID de Venta</th>
                <th>ID de Cliente</th>
                <th>ID de Usuario</th>
                <th>Tipo de recibo</th>
                <th>Serie del recibo</th>
                <th>Numero de recibo</th>
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        @foreach($sale as $sale)
            <tr>
                <td scope="row">{{$sale->id}}</td>
                <td>{{$sale->client_id}}</td>
                <td>{{$sale->user_id}}</td>
                <td>{{$sale->receipt_type}}</td>
                <td>{{$sale->receipt_series}}</td>
                <td>{{$sale->receipt_number}}</td>
                <td>{{$sale->tax}}</td>
                <td>{{$sale->total}}</td>
                <td>{{$sale->status}}</td>
                <td>{{$sale->created_at}}</td>
                <td>{{$sale->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/sale/'.$sale->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/sale/'.$sale->id) }}" method="post">
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