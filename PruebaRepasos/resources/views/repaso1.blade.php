<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container-fluid bg-primary py-3">
    <h1 class="text-center text-white">Convertidor de unidades</h1>
    </div>


<div class="card">


  <div class="card-body">
  <form action="{{ route('rutaRepaso1') }}" method="POST">
        @csrf
        <label for="valor">Ingrese el valor:</label>
        <input type="number" name="valor" id="valor" required>

        <label for="conversion">Seleccione la conversión:</label>
         <select name="conversion" id="conversion">
            <option value="mb_a_gb">MB a GB</option>
            <option value="gb_a_mb">GB a MB</option>
            <option value="gb_a_tb">GB a TB</option>
            <option value="tb_a_gb">TB a GB</option>
        </select> 
        <button type="submit" class="btn btn-primary btn-start">Convertir</button>
    </form>

    

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif

   
  </div>
</div>

</body>
</html>
