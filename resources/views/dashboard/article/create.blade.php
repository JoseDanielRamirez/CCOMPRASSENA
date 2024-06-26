@extends('dashboard.master')
@section('titulo','Nuevo Articulo')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <form action="{{ route('article.store')}}" method="POST">
        @csrf

        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Codigo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="code" id="code"  placeholder="Ingresa el codigo del articulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="Category" class="col-sm-2 col-form-label">Categoria del Producto</label>
            <div class="col-sm-10">
                <select name="category" id="category" class="form-select" required>
                    <option value="">Seleccionar categoria</option>
                    @foreach($category as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div> 
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name"  placeholder="Ingresa el nombre del articulo">
            </div>
        </div> 
        <div class="form-group row">
            <label for="Sale_Price" class="col-sm-2 col-form-label">Precio Venta</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Sale_Price" id="Sale_Price"  placeholder="Ingresa el precio del articulo">
            </div>
        </div> 
        <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Cantidad disponible</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stock" id="stock"  placeholder="Ingresa la cantidad disponible">
            </div>
        </div> 
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripción del producto</label>
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