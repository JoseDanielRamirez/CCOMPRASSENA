@extends('dashboard.master')
@section('titulo','Nueva Persona')
@include('layouts/navigation')
@section('contenido')
<div class="container -py4">

    <form action="{{route('person.store')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="type" class="col-sm-2 col-form-label">Tipo de Persona</label>
        <div class="col-sm-10">
            <select name="type" id="type" class="form-control" required>
                <option value="">Seleccione un tipo</option>
                <option value="Persona Natural">Persona Natural</option>
                <option value="Empresa">Empresa</option>
                <option value="Proveedor">Proveedor</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="First_Name" name="First_Name" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="Last_Name" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Last_Name" name="Last_Name" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de Documento</label>
        <div class="col-sm-10">
            <select name="Document_Type" id="Document_Type" class="form-control" required>
                <option value="">Seleccione un tipo de documento</option>
                <option value="CC">Cédula de Ciudadanía (CC)</option>
                <option value="TI">Tarjeta de Identidad (TI)</option>
                <option value="PASAPORTE">Pasaporte</option>
                <option value="Nit">NIT</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="Document_Number" class="col-sm-2 col-form-label">Número de Documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Document_Number" name="Document_Number">
        </div>
    </div>

    <div class="form-group row">
        <label for="Adress" class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Adress" name="Adress">
        </div>
    </div>

    <div class="form-group row">
        <label for="Phone" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Phone" name="Phone">
        </div>
    </div>

    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Correo Electrónico</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="Email" name="Email">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-success">Registrar</button>
            <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div> 
    
    </form>

</div>

@endsection