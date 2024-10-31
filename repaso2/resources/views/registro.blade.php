@extends('layouts.plantilla1')
@section('titulo','Registro')

@section('contenido2')
<body>
    

<div class="container my-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-header text-center">
                <h3>Formulario de Libros</h3>
            </div>
            <div class="card-body">
                <form action="/enviar" method="POST">
                @csrf

                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input type="text" id="isbn" name="txtisbn" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" id="titulo" name="txttitulo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="autor">Autor:</label>
                        <input type="text" id="autor" name="txtautor" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="paginas">Páginas:</label>
                        <input type="number" id="paginas" name="txtpaginas" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="anio">Año:</label>
                        <input type="number" id="anio" name="txtanio" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="editorial">Editorial:</label>
                        <input type="text" id="editorial" name="txteditorial" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email de Editorial:</label>
                        <input type="email" id="email" name="txtemail" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-4">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
