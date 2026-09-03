<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio</title>

    @vite('resources/scss/main.scss')
</head>
<body>

<header>
    <nav>
        <ul>
            <li>
                <a href="{{ config('app.base_path') }}/">Inicio</a>
            </li>

            <li>
                <a href="{{ config('app.base_path') }}/sobre_mi">Sobre_mi</a>
            </li>

            <li>
                <a href="{{ config('app.base_path') }}/servicios">Servicios</a>
            </li>

            <li>
                <a href="{{ config('app.base_path') }}/contacto">Contacto</a>
            </li>

            <li>
                <a href="{{ config('app.base_path') }}/proyectos">Proyectos</a>
            </li>
        </ul>
    </nav>
</header>

<main>
    @yield('seccion1')
</main>

    <footer>
        <div>
            <p>
                Mi portafolio - 2026
            </p>
        </div>
    </footer>
</body>
</html>
