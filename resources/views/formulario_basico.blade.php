@extends('base.base')

@section('seccion1')
<section>
    <div>
        <h1>Formulario de registro</h1>
        <form method="post">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <br><br>
            </div>

            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
                <br><br>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br><br>
            </div>

            <div>
                <label for="telefono">Telefono:</label>
                <input type="tel" id="telefono" name="telefono" required>
                <br><br>
            </div>

            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <br><br>
            </div>

            <div>
                <label for="comentarios">Comentarios:</label>
                <br>

                <textarea name="comentarios" id="comentarios" requerid></textarea>
                <br><br>
            </div>

            <div>
                <input type="submit" value="Enviar">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</section>

@endsection