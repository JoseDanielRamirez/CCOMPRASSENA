@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>MODIFICAR DETALLE DE INGRESO</h1>
    <form action="{{ url('dashboard/incomedetail/'.$incomedetail->id)}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-group row">
            <label for="Income" class="col-sm-2 col-form-label">ID de Ingreso</label>
            <div class="col-sm-10">
                <select name="income" id="income" class="form-select" required>
                    <option value="">Selecciona el ingreso</option>
                    @foreach($income as $income)
                    <option value="{{$income->id}}">{{$income->id}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="Article" class="col-sm-2 col-form-label">Articulo</label>
            <div class="col-sm-10">
                <select name="article" id="article" class="form-select"  required>
                    <option value="">Selecciona el articulo</option>
                    @foreach($article as $article)
                    <option value="{{$article->id}}">{{$article->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="quantity" id="quantity" value="{{$incomedetail->quantity}}" placeholder="Ingresa la canitdad del articulo">
            </div>
        </div> 

        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Precio Venta</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="price" id="price" value="{{$incomedetail->price}}" placeholder="Ingresa el precio del articulo">
            </div>
        </div> 
    
        
       
    
       
    
        
    
       
    
       
    
       
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div> 
        
    </form> 
</div>
@endsection     