@extends('layouts.plantilla')

@section('title','Ver '. $mostrar->nombre)
    
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white">
                        <h3 class="text-center">Detalle del Libro</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4><b>ID:</b> {{ $mostrar->id_libro }}</h4>
                                <h5><b>Nombre:</b> {{$mostrar->nombre}}</h5>
                                <h5><b>Autor:</b> {{ $mostrar->autor }}</h5>
                                <h5><b>Editorial:</b> {{ $mostrar->editorial }}</h5>
                                <h5><b>Categoria:</b> {{ $mostrar->categoria }}</h5>
                                <h5><b>Estatus:</b> {{ $mostrar->estatus }}</h5>
                                <hr>
                                 <a href="{{route('libros.index')}}" class="btn btn-primary">
                                    <i class="bi bi-arrow-left"></i> Regresar
                                </a> 
                                <a href="{{route('libros.edit', $mostrar)}}" class="btn btn-primary">
                                    <i class="bi bi-arrow-left"></i> Editar Libro
                                </a> 

                                <form action="{{ route('libros.destroy', $mostrar) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este libro?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >
                                        <i class="bi bi-arrow-left" ></i> Eliminar
                                    </button>
                                </form>
                                

                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Detalle</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection