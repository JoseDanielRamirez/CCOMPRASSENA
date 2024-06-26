@extends('dashboard.master')
@section('titulo','Categorias')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <form action="{{ route('category.store')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name"  placeholder="Ingresa el nombre de la Categoría">
            </div>

        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
        </div> 
        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div> 
    </form> 
</div>
@endsection     