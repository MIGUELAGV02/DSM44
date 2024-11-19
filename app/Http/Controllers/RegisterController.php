<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $recuperar = new User();

        $recuperar->name = $request->name;
        $recuperar->email = $request->email;
        $recuperar->password = $request->password;
        $recuperar->role = $request->role;

        $recuperar->save();

        return redirect()->route('home');
    }
}
