@extends('layouts.plantilla')

@section('title','Libros')
    
@section('content')
<div class="container mt-5">

    <div class="text-end mb-3">
        <a href="{{route('libros.create')}}">
            <button class="btn btn-primary">Nuevo Libro</button>
        </a>    
    </div>

    <h2 class="text-center mb-4">Lista de Libros</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nombre del libro</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista as $index => $listaa)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <a href="{{route('libros.show', $listaa->id_libro)}}" class="no-link">{{ $listaa->nombre }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

    {{-- <ul>
        @foreach ($lista as $listaa)
            <li>{{$listaa->nombre}}</li>
        @endforeach
    </ul> --}}