@extends('layouts.plantilla')

@section('title','Crear')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white">
                        <h3 class="text-center">Crear Nuevo Libro</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('libros.store') }}" method="POST">
                            @csrf 
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nombre del Libro</th>
                                        <td>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Autor</th>
                                        <td>
                                            <input type="text" class="form-control" id="autor" name="autor" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Editorial</th>
                                        <td>
                                            <input type="text" class="form-control" id="editorial" name="editorial" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Categoría</th>
                                        <td>
                                            <select class="form-select" id="categoria" name="categoria" required>
                                                <option value="" selected disabled>Selecciona una categoría</option>
                                                <option value="Ficción">Ficción</option>
                                                <option value="No Ficción">No Ficción</option>
                                                <option value="Ciencia">Ciencia</option>
                                                <option value="Historia">Historia</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Estatus</th>
                                        <td>
                                            <select class="form-select" id="estatus" name="estatus" required>
                                                <option value="" selected disabled>Selecciona un estatus</option>
                                                <option value="Disponible">Disponible</option>
                                                <option value="Prestado">Prestado</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save"></i> Guardar Libro
                                </button>
                                <a href="{{ route('libros.index') }}" class="btn btn-primary">
                                    <i class="bi bi-arrow-left"></i> Regresar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
