@extends('base.base')

@section('seccion1')
<section>
    <div>
        <h1>Contacto</h1>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <p>Email: <a href="mailto:danielalamerata1@gmail.com">danielalamerata1@gmail.com</a></p>
        <p>WhatsApp: <a href="https://wa.me/543425233808" target="_blank">+54 3425 233808</a></p>

        <form action="/contacto" method="POST">
            @csrf

            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje">{{ old('mensaje') }}</textarea>
                @error('mensaje')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Enviar</button>
        </form>
    </div>
</section>
@endsection