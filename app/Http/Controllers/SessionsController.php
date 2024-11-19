<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'contra o algo mal :v',
            ]);
        }else {
            if(auth()->user()->role == 'admin'){
                return redirect()->route('home');
            }else{
                return redirect()->route('librosUsuario.index');
            }
        }
       
    }
}
