@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<div class="container -py4">
    <h1>Listado de Ingresos</h1>
    <br>
    <a href="{{url('dashboard/income/create')}}" class="btn btn-primary btn-sm">Nuevo Ingreso</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Provedor id</th>
                <th>Usuario Id</th>
                <th>Tipo de recibo</th>
                <th>Serie del recibo</th>
                <th>Numero de recibo</th>
                <th>Fecha</th>
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Fecha de creacion</th>
                <th>Fecha de actualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($income as $income)
            <tr>
                <td scope="row">{{$income->id}}</td>
                <td>{{$income->provider_id}}</td>
                <td>{{$income->user_id}}</td>
                <td>{{$income->receipt_type}}</td>
                <td>{{$income->receipt_series}}</td>
                <td>{{$income->receipt_number}}</td>
                <td>{{$income->date}}</td>
                <td>{{$income->tax}}</td>
                <td>{{$income->total}}</td>
                <td>{{$income->status}}</td>
                <td>{{$income->created_at}}</td>
                <td>{{$income->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/income/'.$income->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/income/'.$income->id) }}" method="post">
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