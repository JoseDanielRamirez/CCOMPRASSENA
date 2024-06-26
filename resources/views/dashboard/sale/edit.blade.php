@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>MODIFICAR VENTA</h1>
    <form action="{{ url('dashboard/sale/'.$sale->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="Person" class="col-sm-2 col-form-label">cliente</label>
            <div class="col-sm-10">
                <select name="person" id="person" class="form-control" required>
                    <option>Seleccionar Cliente</option>
                    @foreach($person as $person)
                    <option value="{{$person->id}}">{{$person->First_Name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    
        <div class="form-group row">
            <label for="user" class="col-sm-2 col-form-label">usuario</label>
            <div class="col-sm-10">
                <select name="user" id="user" class="form-control" required>
                    <option>Seleccionar usuario</option>
                    @foreach($user as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="receipt_type" name="receipt_type" value="{{$sale->receipt_type}}" required>
            </div>
        </div>
    
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Numero de Serie</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="receipt_series" name="receipt_series" value="{{$sale->receipt_series}}" required>
            </div>
        </div>
    
        <div class="form-group row">
            <label for="receipt_numbre" class="col-sm-2 col-form-label">Numero de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="receipt_number" name="receipt_number" value="{{$sale->receipt_number}}" required>  
            </div>
        </div>
    
    
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tax" name="tax" value="{{$sale->tax}}">
            </div>
        </div>
    
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="total" name="total" value="{{$sale->total}}">
            </div>
        </div>
    
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <input type="status" class="form-control" id="status" name="status" value="{{$sale->status}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Modificar</button>
                <a href="{{url('dashboard/sale')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div> 
       
        
    </form> 
</div>
@endsection     