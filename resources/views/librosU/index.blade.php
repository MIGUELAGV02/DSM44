<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>

    <!-- Agregar Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos CSS externos -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('login.index')}}">Cerrar Sesión</a></li> 
            </ul>
        </nav>
    </header>
    <section class="bienvenida">
        <h1 style="color: #ffffff;">Libreria UTVT</h1>
        <p style="color: #ffffff;">Explora una amplia colección de libros de diversos géneros. Encuentra tus lecturas favoritas aquí.</p>
    </section>


    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <form class="d-flex me-auto" role="search">
                <input name="buscarpor" class="form-control me-2 bg-secondary text-white border-0" 
                    type="search" placeholder="Buscar" aria-label="Buscar" value="{{$buscarpor}}">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4" style="color: #ffffff;">Lista de Libros</h2>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre del libro</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Editorial</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lista as $index => $listaa)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $listaa->nombre }}</td>
                        <td>{{ $listaa->autor }}</td>
                        <td>{{ $listaa->categoria }}</td>
                        <td>{{ $listaa->editorial }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $lista->links('pagination::bootstrap-4') }}
        </div>

    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
