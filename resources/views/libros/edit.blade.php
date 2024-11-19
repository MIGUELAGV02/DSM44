@extends('layouts.plantilla')

@section('title','Editar '. $editar->nombre)

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white">
                        <h3 class="text-center">Editar Libro</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('libros.update', $editar)}}" method="POST">
                            @csrf 
                            @method('put')
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nombre del Libro</th>
                                        <td>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$editar->nombre}}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Autor</th>
                                        <td>
                                            <input type="text" class="form-control" id="autor" name="autor" value="{{$editar->autor}}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Editorial</th>
                                        <td>
                                            <input type="text" class="form-control" id="editorial" name="editorial" value="{{$editar->editorial}}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Categoría</th>
                                        <td>
                                            <select class="form-select" id="categoria" name="categoria" required>
                                                <option value="Ficción" {{ $editar->categoria == 'Ficción' ? 'selected' : '' }}>Ficción</option>
                                                <option value="No Ficción" {{ $editar->categoria == 'No Ficción' ? 'selected' : '' }}>No Ficción</option>
                                                <option value="Ciencia" {{ $editar->categoria == 'Ciencia' ? 'selected' : '' }}>Ciencia</option>
                                                <option value="Historia" {{ $editar->categoria == 'Historia' ? 'selected' : '' }}>Historia</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Estatus</th>
                                        <td>
                                            <select class="form-select" id="estatus" name="estatus" required>
                                                <option value="Disponible" {{$editar->estatus=='Disponible' ? 'selected': ''}} >Disponible</option>
                                                <option value="Prestado" {{$editar->estatus=='Prestado' ? 'selected': ''}} >Prestado</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save"></i> Actualizar Libro
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
