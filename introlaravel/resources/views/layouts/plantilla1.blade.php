<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>@yield('titulo')</title>
    
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <a class="navbar-brand" href="/">Turista sin Maps</a>
        <div class="container">
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('rutaformularios')?'text-warning':'' }}" href="/formulario">{{__('Registro de Clientes')}}</a>
              </li>
        <li class="nav-item">
        <a class="nav-link {{request()->routeIs('rutaclientes')?'text-warning':'' }}" href="/clientes">{{__('Consulta de Clientes')}}</a>
        </li>
        </div>
    </nav>                  
@yield('contenido')
@yield('contenido2')

    
</body>
</html>