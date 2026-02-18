<?php

// Array de idiomas permitidos
$langs = ['es', 'eu'];

//Array asociativo (3 nieveles) para determinar las url permitidas y asociarles el recurso de la vista que corresponda
$arrayRutasGet = [
    'es' => [
        '/es' => [
            'view'      => '/views/es/inicio.php' 
        ],
        '/es/sobre-nosotros' => [
            'view'      => '/views/es/quienesSomos.php'
        ],
        '/es/productos' => [
            'view'      => '/views/es/productos.php'
        ],
        '/es/contacto' => [
            'view'      => '/views/es/contacto.php'
        ],

        '/es/showroom' => [
            'view'      => '/views/templates.php'
        ],
        '/es/terminos-legales' => [
            'view'      => '/views/es/terminos.php'
        ],
        '/es/gracias' => [
            'view'      => '/views/es/gracias.php'
        ],
        
        '/es/productos/panaderia' => [
            'view'      => '/views/es/producto.php'
        ],
        '/es/productos/pasteleria' => [
            'view'      => '/views/es/producto.php'
        ],
        '/es/productos/torrijas' => [
            'view'      => '/views/es/producto.php'
        ],
        '/es/zona-admin' => [
            'view'      => '/views/es/zonaAdmin.php'
        ],
        '/es/logout' => [
            'view'      => '/views/es/logout.php'
        ],
        '/es/registro' => [
            'view'      => '/views/es/logup.php'
        ],
    ],
    'eu' => [
        '/eu' => [
            'view'      => '/views/eu/inicio.php'
        ],
        '/eu/guri-buruz' => [
            'view'      => '/views/eu/quienesSomos.php'
        ],
        '/eu/produktuak' => [
            'view'      => '/views/eu/productos.php'
        ],
        '/eu/kontaktua' => [
            'view'      => '/views/eu/contacto.php'
        ],
        '/eu/legezko-terminoak' => [
            'view'      => '/views/eu/terminos.php'
        ],
        '/eu/eskerrikasko' => [
            'view'      => '/views/eu/gracias.php'
        ],
        '/eu/produktuak/okindegia' => [
            'view'      => '/views/eu/producto.php'
        ],
        '/eu/produktuak/goxotegia' => [
            'view'      => '/views/eu/producto.php'
        ],
        '/eu/produktuak/torrijak' => [
            'view'      => '/views/eu/producto.php'
        ],
        '/eu/admin-gunea' => [
            'view'      => '/views/eu/zonaAdmin.php'
        ],
        '/eu/logout' => [
            'view'      => '/views/eu/logout.php'
        ],
        '/eu/erregistroa' => [
            'view'      => '/views/eu/logup.php'
        ],
    ]
];

// Array de rutas permitidas para peticiones POST (formularios)
$arrayRutasPost = [
    '/app/gestionForm' => [
        'view' => '/app/gestionForm.php',
    ],
    '/app/gestionFormLogin' => [
        'view' => '/app/gestionFormLogin.php',
    ],
    '/app/gestionFormLogup' => [
        'view' => '/app/gestionFormLogup.php',
    ],
];

