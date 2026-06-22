@extends('base.base')

@section('seccion1')
<section class="hero">
    <p class="hero-saludo">Hola, soy</p>
    <h1 class="hero-nombre">Daniela Lamerata</h1>
    <h2 class="hero-titulo">Desarrolladora Web</h2>
    <p class="hero-descripcion">
        Estudiante de Desarrollo de Software en ITEC El Molino. 
        Construyo sitios y aplicaciones web con atención al detalle 
        y siempre aprendiendo algo nuevo.
    </p>
    <div class="hero-botones">
        <a href="/proyectos" class="btn-principal">Ver proyectos</a>
        <a href="/contacto" class="btn-secundario">Contactame</a>
    </div>
</section>
@endsection