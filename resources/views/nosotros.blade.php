@extends('layouts.plantilla')

@section('title','home')
    
@section('content')

<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4">Nosotros</h1>
    </div>
</section>


<!-- Equipo -->
<section class="container py-5">
    <h2 class="text-center mb-4">Equipo</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <img src="img/yo.jpg" class="team-photo img-fluid rounded-circle mb-3" alt="Foto del miembro del equipo">
            <h5>Miguel Vidal</h5>
            <p>Uno xd</p>
        </div>
        <div class="col-md-4">
            <img src="img/uno.jpg" class="team-photo img-fluid rounded-circle mb-3" alt="Foto del miembro del equipo">
            <h5>Eduardo Nepomuceno Hernandez</h5>
            <p>Dos :3</p>
        </div>
        <div class="col-md-4">
            <img src="img/dos.jpg" class="team-photo img-fluid rounded-circle mb-3" alt="Foto del miembro del equipo">
            <h5>Laura Castelar</h5>
            <p>Tres :v</p>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="contact-section text-center">
    <div class="container">
        <h2>Suguerencias...</h2>
        <a href="#" class="btn btn-light">Enviar un mensaje</a>
    </div>
</section>

@endsection