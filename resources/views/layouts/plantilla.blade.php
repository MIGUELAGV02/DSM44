<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titel')</title>
    {{-- favicon --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('libros.index') }}">Libros</a></li>
                {{-- <li><a href="{{ route('nosotros') }}">Contacto</a></li> --}}
                <li><a href="{{route('register.index')}}">Nuevo Usuario</a></li>
                <li><a href="{{ route('login.index') }}">Cerrar Sesión</a></li>

            </ul>
        </nav>
    </header>

    @if(request()->route()->getName() != 'libros.index' && request()->route()->getName() != 'libros.create' && request()->route()->getName() != 'libros.edit' && request()->route()->getName() != 'libros.show' && request()->route()->getName() != 'nosotros')
    <!-- Verifica que no sea ni 'libros.edit' ni 'libros.show' -->
    <section class="bienvenida">
        <h1 style="color: #ffffff;">Libreria UTVT</h1>
        <p style="color: #ffffff;">Explora una amplia colección de libros de diversos géneros. Encuentra tus lecturas favoritas aquí.</p>
    </section>
    @endif

    @yield('content')

    {{-- footer --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
