@extends('layouts.plantilla1')
@section('titulo','Editar Cliente')

@section('contenido')

<div class="container d-flex justify-content-center my-5">
    <div class="card" style="max-width: 600px; width: 100%;">
        <form action="{{ route('actualizarCliente', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
            @session('exito')
        {!<script>
            Swal.fire({
            title: "Respuesta del servidor",
            text: '{{ $value }}',
            icon: "success"
          });
          </script>!}
        @endSession

            <div class="card-header text-center">
                <h4>{{ __('Editar Cliente') }}</h4>
            </div>

            <div class="card-body">
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}}</label>
                    <input type="text" class="form-control" id="nombre" name="txtnombre" placeholder="Ingresa tu nombre" value="{{ old('txtnombre', $cliente->nombre) }}">
                    <small class="text-danger">{{ $errors->first('txtnombre') }}</small>
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                    <input type="text" class="form-control" id="apellido" name="txtapellido" placeholder="Ingresa tu apellido" value="{{ old('txtapellido', $cliente->apellido) }}">
                    <small class="text-danger">{{ $errors->first('txtapellido') }}</small>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}</label>
                    <input type="email" class="form-control" id="correo" name="txtcorreo" placeholder="Ingresa tu correo" value="{{ old('txtcorreo', $cliente->correo) }}">
                    <small class="text-danger">{{ $errors->first('txtcorreo') }}</small>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                    <input type="tel" class="form-control" id="telefono" name="txttelefono" placeholder="Ingresa tu teléfono" value="{{ old('txttelefono', $cliente->telefono) }}">
                    <small class="text-danger">{{ $errors->first('txttelefono') }}</small>
                </div>
            </div>

            <div class="card-footer text-center">
                <button type="submit" class="btn btn-success">{{ __('Actualizar Cliente') }}</button>
            </div>
        </form>
    </div>
</div>

@endsection
