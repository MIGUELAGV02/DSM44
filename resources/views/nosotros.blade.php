@extends('layouts.plantilla')

@section('title', 'Nosotros')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h1 class="display-4 font-weight-bold" style="color: #343a40;">Conoce a Nuestro Equipo</h1>
        <p class="lead" style="color: #6c757d;">Un grupo de profesionales comprometidos con el éxito de cada proyecto.</p>
    </div>
</section>

<!-- Equipo -->
<section class="team-section py-5">
    <div class="container">
        <h2 class="text-center mb-5" style="color: #ffffff;">Nuestro Equipo</h2>
        <div class="row text-center">
            <!-- Miembro 1 -->
            <div class="col-md-4 mb-4">
                <img src="img/yo.jpg" class="team-photo img-fluid rounded-circle mb-3" alt="Miguel Vidal">
                <h5 class="font-weight-bold" style="color: #ffffff;">Miguel Vidal</h5>
                <p class="text-muted">Especialista en Desarrollo Web</p>
            </div>
            <!-- Miembro 2 -->
            <div class="col-md-4 mb-4">
                <img src="img/uno.jpg" class="team-photo img-fluid rounded-circle mb-3" alt="Eduardo Nepomuceno Hernandez">
                <h5 class="font-weight-bold" style="color: #ffffff;">Eduardo Nepomuceno Hernandez</h5>
                <p class="text-muted">Desarrollador Full Stack</p>
            </div>
            <!-- Miembro 3 -->
            <div class="col-md-4 mb-4">
                <img src="img/dos.jpg" class="team-photo img-fluid rounded-circle mb-3" alt="Laura Castelar">
                <h5 class="font-weight-bold" style="color: #ffffff;">Laura Castelar</h5>
                <p class="text-muted">Diseñadora UX/UI</p>
            </div>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="contact-section py-5 text-center bg-light">
    <div class="container">
        <h2 class="mb-4" style="color: #343a40;">¿Tienes alguna sugerencia o pregunta?</h2>
        <p class="lead mb-4" style="color: #6c757d;">Nos encantaría saber tu opinión y responder cualquier consulta que tengas.</p>
        <a href="#" class="btn btn-primary btn-lg">Enviar un mensaje</a>
    </div>
</section>

@endsection
