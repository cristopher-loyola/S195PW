@extends('layouts.plantilla1')
@section('titulo','Registro')

@section('contenido2')


<div class="container my-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-header text-center">
                <h3>{{__('Formulario de Libros')}}</h3>
            </div>
            <div class="card-body">
            @if(session('exito'))
    <script>
        Swal.fire({
            title: "{{__('Respuesta del servidor')}}",
            text: '{{ session('exito') }}',
            icon: "success"
        });
    </script>
@endif
                <form action="/enviar" method="POST">
                @csrf

                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input type="text" id="isbn" name="txtisbn" class="form-control">
                        <small>{{$errors->first('txtisbn')}}</small>
                    </div>

                    <div class="form-group">
                        <label for="titulo">{{__('Título')}}:</label>
                        <input type="text" id="titulo" name="txttitulo" class="form-control">
                        <small>{{$errors->first('txttitulo')}}</small>
                    </div>

                    <div class="form-group">
                        <label for="autor">{{__('Autor')}}</label>
                        <input type="text" id="autor" name="txtautor" class="form-control">
                        <small>{{$errors->first('txtautor')}}</small>
                    </div>

                    <div class="form-group">
                        <label for="paginas">{{__('Paginas')}}</label>
                        <input type="number" id="paginas" name="txtpaginas" class="form-control">
                        <small>{{$errors->first('txtpaginas')}}</small>
                    </div>

                    <div class="form-group">
                        <label for="anio">{{__('Año')}}</label>
                        <input type="number" id="anio" name="txtanio" class="form-control">
                        <small>{{$errors->first('txtanio')}}</small>
                    </div>

                    <div class="form-group">
                        <label for="editorial">{{'Editorial'}}</label>
                        <input type="text" id="editorial" name="txteditorial" class="form-control">
                        <small>{{$errors->first('txteditorial')}}</small>
                    </div>

                    <div class="form-group">
                        <label for="email">{{__('Email de Editorial')}}</label>
                        <input type="email" id="email" name="txtemail" class="form-control">
                        <small>{{$errors->first('txtemail')}}</small>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-4">{{__('Enviar')}}</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
