@extends('layoutsU.plantillaU')

@section('title', 'Login')

@section('content')
<div class="form-container">
    <h2>Iniciar Sesión</h2>

    

    <form action="{{route('login.store')}}" method="POST">
        @csrf
        <input type="email" class="boder border-gray-200 rounded-mb bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email"
        id = "email" name="email" required>

        <input type="password" class="boder border-gray-200 rounded-mb bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password"
        id = "password" name="password" required>

        @error('message')
            <p>*Error</p>
        @enderror
        
        <button type="submit" class="rounded-mb bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600">Iniciar Sesión</button>
    </form>
    </div>
    
    @endsection