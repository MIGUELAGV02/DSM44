<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroUController extends Controller
{
    public function index(Request $request){
        $buscarpor = $request->get('buscarpor');

        $lista = Libro::orderBy('id_libro', 'desc')->where('nombre','like','%'.$buscarpor.'%')->paginate(5);


        return view('librosU.index',compact('lista','buscarpor'));
    }
}
