<?php

return [

    /*
     * Desactivado: no queremos que "adivine" las rutas siguiendo los <a href>,
     * porque esos href ya tienen el prefijo de producción (/Daniela-Lamerata-portfolio)
     * y no existen como rutas reales en el servidor local.
     */
    'crawl' => false,

    /*
     * En cambio, le decimos exactamente qué rutas locales exportar.
     * Estas SÍ tienen que coincidir con routes/web.php (sin el prefijo de producción).
     */
    'paths' => [
        '',
        'sobre_mi',
        'servicios',
        'contacto',
        'proyectos',
    ],

    'use_streaming' => false,

    'include_files' => [
        'public' => '',
    ],

    'exclude_file_patterns' => [
        '/\.php$/',
        '/mix-manifest\.json$/',
    ],

    'clean_before_export' => true,

    'disk' => 'export',

    'before' => [
        // 'assets' => '/usr/local/bin/yarn production',
    ],

    'after' => [
        // 'deploy' => '/usr/local/bin/netlify deploy --prod',
    ],

];
