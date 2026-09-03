<?php

namespace App\Http\Controllers;

class ProyectoController extends Controller
{
    public function index()
    {
        // Antes esto salía de Proyecto::all() (base de datos).
        // Al exportar a estático no hay servidor que corra esa consulta,
        // así que el contenido queda fijo acá. Para sumar/editar un proyecto,
        // se edita este array y se vuelve a correr el export.
        $proyectos = [
            (object) [
                'titulo' => 'FitMotion',
                'descripcion' => 'Sistema de gestión de gimnasios con roles de administrador y socio: alta de socios, planes, pagos mensuales con recibos en PDF, rutinas personalizadas y seguimiento de progreso.',
                'tecnologias' => 'React 19, Vite, React Router · Laravel 11, PostgreSQL, Sanctum',
                'url' => 'https://github.com/danielalamerata/gym-frontend',
                'label_url' => 'Ver frontend',
                'url_secundaria' => 'https://github.com/danielalamerata/gym-backend',
                'label_secundaria' => 'Ver backend',
            ],
            (object) [
                'titulo' => 'NutriTrack',
                'descripcion' => 'Sistema de gestión ganadera desarrollado como proyecto final de la Tecnicatura Superior en Desarrollo de Software. Trabajo en equipo con arquitectura API + app de escritorio/móvil.',
                'tecnologias' => '.NET 10, C#, ASP.NET Core Web API, .NET MAUI, Entity Framework Core, PostgreSQL',
                'url' => 'https://github.com/tomasstauber/NutriTrack',
                'label_url' => 'Ver proyecto',
            ],
            (object) [
                'titulo' => 'Sistema Gym (v1)',
                'descripcion' => 'Versión previa / MVP académico de reservas de clases de gimnasio, con roles admin y socio. Es el antecesor de FitMotion, antes de migrar a una arquitectura con backend propio.',
                'tecnologias' => 'React, Vite, Zustand, Tailwind CSS (persistencia local, sin backend)',
                'url' => 'https://github.com/tomasstauber/sistema_gym',
                'label_url' => 'Ver proyecto',
            ],
        ];

        return view('proyectos', compact('proyectos'));
    }
}