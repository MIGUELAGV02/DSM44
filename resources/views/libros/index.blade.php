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
    @extends('layouts.plantilla')

    @section('title','Libros')
    
    @section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4" style="color: #ffffff;">Lista de Libros</h2>

        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <form class="d-flex me-auto" role="search">
                    <input name="buscarpor" class="form-control me-2 bg-secondary text-white border-0" 
                        type="search" placeholder="Buscar" aria-label="Buscar" value="{{$buscarpor}}">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
        
                <a href="{{route('libros.create')}}">
                    <button class="btn btn-primary">Nuevo Libro</button>
                </a>
            </div>
        </nav>
        

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre del libro</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lista as $index => $listaa)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $listaa->nombre }}</td>
                        <td>{{ $listaa->autor }}</td>
                        <td>{{ $listaa->categoria }}</td>
                        <td>
                            <!-- Botón "Ver" con icono -->
                            <a href="{{ route('libros.show', $listaa->id_libro) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> Ver
                            </a>

                            <!-- Botón "Editar" con icono -->
                            <a href="{{ route('libros.edit', $listaa->id_libro) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>

                            <!-- Formulario para "Eliminar" con icono -->
                            <form action="{{ route('libros.destroy', $listaa->id_libro) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Paginación -->
        <div class="pagination">
            {{ $lista->links('pagination::bootstrap-4') }}
        </div>
    </div>
    @endsection

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
