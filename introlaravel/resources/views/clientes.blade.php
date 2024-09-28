@extends('layouts.plantilla1')
@section('titulo','Clientes')

@section('contenido2')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card w-50 shadow">
        <div class="card-header">
            Cristopher Antonio Loyola Martinez
        </div>
        <div class="card-body">
            <h5 class="fw-bold">loyolacristo303@gmail.com</h5>
            <h5 class="fw-medium">4421057656</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between">
            <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </div>
    </div>
</div>


@endsection