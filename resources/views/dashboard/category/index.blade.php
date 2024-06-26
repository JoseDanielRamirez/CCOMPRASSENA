@extends('dashboard.master')
@section('titulo','Categorias')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Listado de Categorias</h1>
        <br>
        <a href="{{url('dashboard/category/create')}}" class="btn btn-primary btn-sm">Nueva categoria</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id Categoria</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $category)
                <tr>
                    <td scope="row">{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->state ? _('Activo') : _('Inactivo')}}</td>
                    <td><a href="{{url('dashboard/category/'.$category->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
                    <td>
                        <form action="{{ url('dashboard/category/'.$category->id) }}" method="post">
                            @method("DELETE ")
                            @csrf
                            <button class="bi bi-eraser-fill" type="submit"></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</main>
@endsection 