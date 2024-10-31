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
                            <div class="mb-3">
                                <label for="nombre" class="form-label"><b>Nombre del Libro</b></label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="autor" class="form-label"><b>Autor</b></label>
                                <input type="text" class="form-control" id="autor" name="autor" required>
                            </div>
                            <div class="mb-3">
                                <label for="editorial" class="form-label"><b>Editorial</b></label>
                                <input type="text" class="form-control" id="editorial" name="editorial" required>
                            </div>
                            <div class="mb-3">
                                <label for="categoria" class="form-label"><b>Categoría</b></label>
                                <select class="form-select" id="categoria" name="categoria" required>
                                    <option value="" selected disabled>Selecciona una categoría</option>
                                    <option value="Ficción">Ficción</option>
                                    <option value="No Ficción">No Ficción</option>
                                    <option value="Ciencia">Ciencia</option>
                                    <option value="Historia">Historia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="estatus" class="form-label"><b>Estatus</b></label>
                                <select class="form-select" id="estatus" name="estatus" required>
                                    <option value="" selected disabled>Selecciona un estatus</option>
                                    <option value="Disponible">Disponible</option>
                                    <option value="Prestado">Prestado</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <a href="">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-save"></i> Guardar Libro
                                    </button>
                                </a>
                                <a href="{{route('libros.index')}}" class="btn btn-primary">
                                    <i class="bi bi-arrow-left"></i> Regresar
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Crear Nuevo Libro</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection