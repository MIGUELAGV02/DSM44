@extends('layouts.plantilla')

@section('title','Ver '. $mostrar->nombre)

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white text-center">
                        <h3><i class="bi bi-book-half"></i> Detalle del Libro</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $mostrar->id_libro }}</td>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <td>{{ $mostrar->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Autor</th>
                                    <td>{{ $mostrar->autor }}</td>
                                </tr>
                                <tr>
                                    <th>Editorial</th>
                                    <td>{{ $mostrar->editorial }}</td>
                                </tr>
                                <tr>
                                    <th>Categoría</th>
                                    <td>{{ $mostrar->categoria }}</td>
                                </tr>
                                <tr>
                                    <th>Estatus</th>
                                    <td>
                                        <span class="badge {{ $mostrar->estatus == 'Activo' ? 'bg-success' : 'bg-danger' }}">
                                            {{ $mostrar->estatus }}
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('libros.index') }}" class="btn btn-outline-primary">
                                <i class="bi bi-arrow-left-circle"></i> Regresar
                            </a>
                            <a href="{{ route('libros.edit', $mostrar) }}" class="btn btn-outline-warning">
                                <i class="bi bi-pencil-square"></i> Editar Libro
                            </a>

                            <a href="{{ route('libros.pdf', $mostrar) }}" class="btn btn-outline-warning">
                                <i class="bi bi-pencil-square"></i> PDF
                            </a>

                            <form action="{{ route('libros.destroy', $mostrar) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este libro?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
