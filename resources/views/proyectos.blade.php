@extends('base.base')

@section('seccion1')
<section>
    <div>
        <h1>Proyectos</h1>

        @forelse($proyectos as $proyecto)
            <div class="proyecto-card">
                <h2>{{ $proyecto->titulo }}</h2>
                <p>{{ $proyecto->descripcion }}</p>
                <p><strong>Tecnologías:</strong> {{ $proyecto->tecnologias }}</p>
                @if($proyecto->url)
                    <a href="{{ $proyecto->url }}" target="_blank">Ver proyecto</a>
                @endif
            </div>
        @empty
            <p>No hay proyectos todavía.</p>
        @endforelse
    </div>
</section>
@endsection