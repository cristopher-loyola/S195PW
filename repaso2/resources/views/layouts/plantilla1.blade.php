<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>
<body>
 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand {{request()->routeIs('rutainicio')?'text-warning':'' }}" href="/">La Casa del Libro</a>
       
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{request()->routeIs('rutaregistro')?'text-success':'' }}" href="/registro">Registro de Libro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container my-5">
        @yield('contenido')
        @yield('contenido2')
    </div>

    <footer class="bg-light text-center text-muted py-3 mt-4">
        <div class="container">
            <p class="mb-0">La Casa del Libro</p>
            <p class="mb-0">&copy; <span id="year"></span> Todos los derechos reservados</p>
            <p class="mb-0" >31 de octubre de 2024</p>
        </div>
    </footer>

 
</body>
</html>
