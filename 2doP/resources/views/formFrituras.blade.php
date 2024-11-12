<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/js/app.js'])
    <title>Document</title>

</head>
<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">

    <form action="{{ url('/enviar') }}" method="POST">



    @csrf
    @if(session('exito'))
            <script>
                Swal.fire({
                    title: "{{__('Respuesta del servidor')}}",
                    text: '{{ session('exito') }}',
                    icon: "success"
                });
            </script>
            @endif

        <div class="mb-3">
            <label  class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
            <small>{{$errors->first('nombre')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Sabor(s): </label>
            <input type="text" class="form-control" id="sabor" name="sabor">
            <small>{{$errors->first('sabor')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Peso: </label>
            <input type="text" class="form-control"id="peso" name="peso"  >
            <small>{{$errors->first('peso')}}</small>
        </div>

        <button type="submit" class="btn btn-primary "> Guardar Fritura</button>
</div>

</body>
</html>