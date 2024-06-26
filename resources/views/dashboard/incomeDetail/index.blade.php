@extends('dashboard.master')
@section('titulo','DetalleIngreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Listado de  Detalle de Ingreso</h1>
    <br>
    <a href="{{url('dashboard/incomedetail/create')}}" class="btn btn-primary btn-sm">Nuevo detalle de ingreso</a>
    <table  class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID Detalle de Ingreso</th>
                <th>ID Ingreso</th>
                <th>ID de Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        @foreach($incomedetail as $incomedetail)
            <tr>
                <td scope="row">{{$incomedetail->id}}</td>
                <td>{{$incomedetail->income_id}}</td>
                <td>{{$incomedetail->article_id}}</td>
                <td>{{$incomedetail->quantity}}</td>
                <td>{{$incomedetail->price}}</td>
                <td>{{$incomedetail->created_at}}</td>
                <td>{{$incomedetail->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/incomedetail/'.$incomedetail->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/incomedetail/'.$incomedetail->id) }}" method="post">
                        @method("DELETE ")
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