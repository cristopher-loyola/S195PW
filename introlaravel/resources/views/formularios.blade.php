@extends('layouts.plantilla1')
@section('titulo','formulario Clientes')

@section('contenido')

<div class="card text-center m-5">  


    <!-- @if (session('exito'))
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
 @endif
 <--Segunda metodo para devolver una respuesta -->
  <!-- @session('exito')
    <x-Alert tipo="danger"> {{ session('value') }} </x-Alert>
  @endSession --> 

  @session('exito')
  {!<script>
    Swal.fire({
    title: "Respuesta del servidor",
    text: '{{ $value }}',
    icon: "success"
  });
  </script>!}
  @endSession
    <form action="{{ route('procesar')}}" method="POST">
        @csrf

        <div class="card-header">
            
            {{__('Registro de clientes')}}
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label for="nombre" class="form-label">{{__('Nombre')}}</label>
                <input type="text" class="form-control" id="nombre" name="txtnombre" placeholder="Ingresa tu nombre">
                <small>{{$errors->first('txtnombre')}}</small>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                <input type="text" class="form-control" id="apellido" name="txtapellido" placeholder="Ingresa tu apellido">
                <small>{{$errors->first('txtapellido')}}</small>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">{{__('Correo')}}</label>
                <input type="email" class="form-control" id="correo" name="txtcorreo" placeholder="Ingresa tu correo">
                <small>{{$errors->first('txtcorreo')}}</small>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                <input type="tel" class="form-control" id="telefono" name="txttelefono" placeholder="Ingresa tu teléfono">
                <small>{{$errors->first('txttelefono')}}</small>
            </div>
        </div>

        <div class="card-footer text-body-secondary">
            <button type="submit" class="btn btn-success">{{ __('Registrar Cliente')}}</button>
        </div>
    </form>
</div>

@endsection