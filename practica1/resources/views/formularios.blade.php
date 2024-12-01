@extends('layouts.plantilla1')
@section('titulo','Formulario Clientes')

@section('contenido')

<div class="container d-flex justify-content-center my-5">
    <div class="card" style="max-width: 600px; width: 100%;">
        @session('exito')
        {!<script>
            Swal.fire({
            title: "Respuesta del servidor",
            text: '{{ $value }}',
            icon: "success"
          });
          </script>!}
        @endSession

    
        <form action="{{route ('cliente.store')}}" method="POST">
            @csrf

            <div class="card-header text-center">
                <h4>{{ __('Registro de Clientes') }}</h4>
            </div>

            <div class="card-body">
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}}</label>
                    <input type="text" class="form-control" id="nombre" name="txtnombre" placeholder="Ingresa tu nombre" value="{{ old('txtnombre') }}">
                    <small class="text-danger">{{ $errors->first('txtnombre') }}</small>
                </div>

                <!
                <div class="mb-3">
                    <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                    <input type="text" class="form-control" id="apellido" name="txtapellido" placeholder="Ingresa tu apellido" value="{{ old('txtapellido') }}">
                    <small class="text-danger">{{ $errors->first('txtapellido') }}</small>
                </div>

                
                <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}</label>
                    <input type="email" class="form-control" id="correo" name="txtcorreo" placeholder="Ingresa tu correo" value="{{ old('txtcorreo') }}">
                    <small class="text-danger">{{ $errors->first('txtcorreo') }}</small>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                    <input type="tel" class="form-control" id="telefono" name="txttelefono" placeholder="Ingresa tu teléfono" value="{{ old('txttelefono') }}">
                    <small class="text-danger">{{ $errors->first('txttelefono') }}</small>
                </div>
                
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-success">{{ __('Registrar Cliente') }}</button>
            </div>
            </div>

        </form>
    </div>
</div>

@endsection
