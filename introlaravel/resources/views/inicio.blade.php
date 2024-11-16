<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Turista</title>
    @vite(['resources/js/app.js'])
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .welcome-text {
            text-align: center;
        }
        .welcome-text h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }
        .welcome-text p {
            font-size: 1.2rem;
        }
        .btn-start {
            margin-top: 20px;
            font-size: 1.2rem;
            padding: 10px 30px;
        }
    </style>
</head>
<body>
    <div class="welcome-text">
        <h1>Bienvenido querido Turista</h1>
        <p>Presiona el botón para iniciar...</p>
        <a href="{{ route('rutaformulario')}}" class="btn btn-primary btn-start">¡Comencemos!</a>
    </div>
</body>
</html>
