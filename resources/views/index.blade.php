@extends('base.base')

@section('seccion1')
<section class="hero">
    <p class="hero-saludo">Hola, soy</p>
    <h1 class="hero-nombre">Daniela Lamerata</h1>
    <h2 class="hero-titulo">Desarrolladora de Software</h2>
    <p class="hero-descripcion">
        Estudiante de Desarrollo de Software en ITEC El Molino. 
        Construyo sitios y aplicaciones web con atención al detalle 
        y siempre aprendiendo algo nuevo.
    </p>
    <div class="hero-botones">
        <a href="{{ config('app.base_path') }}/proyectos" class="btn-principal">Ver proyectos</a>
        <a href="{{ config('app.base_path') }}/contacto" class="btn-secundario">Contactame</a>
    </div>
</section>
@endsection