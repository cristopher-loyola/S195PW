@extends('layouts.plantilla1')
@section('titulo','Clientes')

@section('contenido2')

<div class="card-header text-center">
                <h4>{{ __(' Consulta Cliente') }}</h4>
            </div>


            @session('exito')
        {!<script>
            Swal.fire({
            title: "Respuesta del servidor",
            text: '{{ $value }}',
            icon: "success"
          });
          </script>!}
        @endSession
            
<div class="container">
    <div class="row justify-content-center">
        @foreach($consultaClientes as $cliente)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-header">
                       {{$cliente->nombre}}
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold">{{$cliente->correo}}</h5>
                        <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                        <p class="card-text fw-lighter"></p>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between">
                    <a href="{{ route('editarCliente', $cliente->id) }}" class="btn btn-warning btn-sm">Actualizar</a>
                    <form action="{{ route('eliminarCliente', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')   
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">
                     Eliminar
                    </button>
                    </form> 
                    

                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
