<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LibroController extends Controller
{
    public function index(Request $request){

        $buscarpor = $request->get('buscarpor');

        $lista = Libro::orderBy('id_libro', 'desc')->where('nombre','like','%'.$buscarpor.'%')->paginate(5);


        return view('libros.index',compact('lista','buscarpor'));
    }


    // public function pdf(Libro $xd){
        
    //     $xd = Libro::all();
    //     $pdf = Pdf::loadView('libros.pdf', compact('xd'));
    //      return $pdf->stream();
    //     //return $pdf->download('libro.pdf');

    // }

    


    public function create(){
        return view('libros.create');
    }

    public function show($id_libro){
        $mostrar = Libro::find($id_libro);

        return view('libros.show', compact('mostrar'));
    }


    public function pdf(Libro $ver)
    {
        $mostrar = Libro::find($ver);

        //dd($mostrar);
        
        $pdf = Pdf::loadView('libros.pdf', compact('mostrar'));

        return $pdf->stream("Detalle_Libro.pdf");

    }

    
    public function store(Request $request){
        $recuperar = new Libro();

        $recuperar->nombre = $request->nombre;
        $recuperar->autor = $request->autor;
        $recuperar->editorial = $request->editorial;
        $recuperar->categoria = $request->categoria;
        $recuperar->estatus = $request->estatus;

        $recuperar->save();

        return redirect()->route('libros.show', $recuperar);
    }

    public function edit(Libro $editar, Request $request){
        return view('libros.edit', compact('editar'));
    }

    public function update(Request $request, Libro $editar){
        $editar->nombre = $request->nombre;
        $editar->autor = $request->autor;
        $editar->editorial = $request->editorial;
        $editar->categoria = $request->categoria;
        $editar->estatus = $request->estatus;

        $editar->save();
        return redirect()->route('libros.index', $editar);
    }
    
    public function destroy(Libro $eliminar){
        $eliminar->delete();
        return redirect()->route('libros.index');
    }
}
