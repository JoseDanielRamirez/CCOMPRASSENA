@extends('dashboard.master')
@section('titulo','Nuevo Ingreso')
@include('layouts/navigation')
@section('contenido')
<div class="container -py4">

    <form action="{{route('income.store')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="Person" class="col-sm-2 col-form-label">Proveedor</label>
        <div class="col-sm-10">
            <select name="person" id="person" class="form-control" required>
                <option>Seleccionar proveedor</option>
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
            <input type="text" class="form-control" id="receipt_type" name="receipt_type" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="receipt_series" class="col-sm-2 col-form-label">Numero de Serie</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="receipt_series" name="receipt_series" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="receipt_numbre" class="col-sm-2 col-form-label">Numero de recibo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="receipt_number" name="receipt_number" required>  
        </div>
    </div>

    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Fecha del ingreso</label>
        <div class="col-sm-10">
            <input size="16" type="text" name="date" class="form-control" id="date" >
        </div>
    </div>

    <div class="form-group row">
        <label for="Adress" class="col-sm-2 col-form-label">Impuesto</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tax" name="tax">
        </div>
    </div>

    <div class="form-group row">
        <label for="total" class="col-sm-2 col-form-label">Total</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="total" name="total">
        </div>
    </div>

    <div class="form-group row">
        <label for="status" class="col-sm-2 col-form-label">Estado</label>
        <div class="col-sm-10">
            <input type="status" class="form-control" id="status" name="status">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-success">Registrar</button>
            <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div> 
    
    </form>

</div>

@endsection