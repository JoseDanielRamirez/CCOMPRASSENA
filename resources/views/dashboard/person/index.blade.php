@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Listado de Personas</h1>
        <br>
        <a href="{{url('dashboard/person/create')}}" class="btn btn-primary btn-sm">Nueva Persona</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id Persona</th>
                    <th>Tipo de Persona</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo de Documento</th>
                    <th>Numero de documento</th>
                    <th>Direccion</th>
                    <th>Numero de telefono</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($person as $person)
                <tr>
                    <td scope="row">{{$person->id}}</td>
                    <td>{{$person->type}}</td>
                    <td>{{$person->First_Name}}</td>
                    <td>{{$person->Last_Name}}</td>
                    <td>{{$person->Document_Type}}</td>
                    <td>{{$person->Document_Number}}</td>
                    <td>{{$person->Adress}}</td>
                    <td>{{$person->Phone}}</td>
                    <td>{{$person->Email}}</td>
                    <td><a href="{{url('dashboard/person/'.$person->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
                    <td>
                        <form action="{{ url('dashboard/person/'.$person->id) }}" method="post">
                            @method("DELETE ")
                            @csrf
                            <button class="bi bi-eraser-fill" type="submit"></button>
                        </form>
                    </td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>

</main>
@endsection 