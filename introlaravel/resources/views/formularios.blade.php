@extends('layouts.plantilla1')
@section('titulo','formulario Clientes')

@section('contenido')

<div class="card text-center m-5">  
    <form action="">

        <div class="card-header">
            Registro de clientes
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa tu apellido">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo">
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu teléfono">
            </div>

        </div>

        <div class="card-footer text-body-secondary">
            <button type="submit" class="btn btn-success">Registrar Cliente</button>
        </div>

    </form>
</div>



@endsection