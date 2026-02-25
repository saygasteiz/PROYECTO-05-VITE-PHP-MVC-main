<?php

// Array de idiomas permitidos
$langs = ['es', 'eu'];

//Array asociativo (3 nieveles) para determinar las url permitidas y asociarles el recurso de la vista que corresponda
$arrayRutasGet = [
    'es' => [
        '/es' => [
            'view'      => '/views/inicio.php',
            'content'   => 'inicio'
        ],
        '/es/sobre-nosotros' => [
            'view'      => '/views/quienesSomos.php',
            'content'   => 'quienesSomos'
        ],
        '/es/productos' => [
            'view'      => '/views/productos.php',
            'content'   => 'productos'
        ],
        '/es/contacto' => [
            'view'      => '/views/contacto.php',
            'content'   => 'contacto'
        ],

        '/es/showroom' => [
            'view'      => '/views/templates.php',
            'content'   => 'templates'
        ],
        '/es/showroom-pf' => [
            'view'      => '/views/templatesPF.php',
            'content'   => 'templatesPF'
        ],
        '/es/terminos-legales' => [
            'view'      => '/views/terminos.php',
            'content'   => 'terminos'
        ],
        '/es/gracias' => [
            'view'      => '/views/gracias.php',
            'content'   => 'gracias'
        ],

        '/es/productos/panaderia' => [
            'view'      => '/views/producto.php',
            'content'   => 'producto'
        ],
        '/es/productos/pasteleria' => [
            'view'      => '/views/producto.php',
            'content'   => 'producto'
        ],
        '/es/productos/torrijas' => [
            'view'      => '/views/producto.php',
            'content'   => 'producto'
        ],
        '/es/zona-admin' => [
            'view'      => '/views/zonaAdmin.php',
            'content'   => 'zonaAdmin'
        ],
        '/es/logout' => [
            'view'      => '/views/logout.php',
            'content'   => 'logout'
        ],
        '/es/registro' => [
            'view'      => '/views/logup.php',
            'content'   => 'logup'
        ],
    ],
    'eu' => [
        '/eu' => [
            'view'      => '/views/inicio.php',
            'content'   => 'inicio'
        ],
        '/eu/guri-buruz' => [
            'view'      => '/views/quienesSomos.php',
            'content'   => 'quienesSomos'
        ],
        '/eu/produktuak' => [
            'view'      => '/views/productos.php',
            'content'   => 'productos'
        ],
        '/eu/kontaktua' => [
            'view'      => '/views/contacto.php',
            'content'   => 'contacto'
        ],

        
        '/es/showroom' => [
            'view'      => '/views/templates.php',
            'content'   => 'templates'
        ],
        
        '/es/showroom-pf' => [
            'view'      => '/views/templatesPF.php',
            'content'   => 'templatesPF'
        ],

        

        '/eu/legezko-terminoak' => [
            'view'      => '/views/terminos.php',
            'content'   => 'terminos'
        ],
        '/eu/eskerrikasko' => [
            'view'      => '/views/gracias.php',
            'content'   => 'gracias'
        ],
        '/eu/produktuak/okindegia' => [
            'view'      => '/views/producto.php',
            'content'   => 'producto'
        ],
        '/eu/produktuak/goxotegia' => [
            'view'      => '/views/producto.php',
            'content'   => 'producto'
        ],
        '/eu/produktuak/torrijak' => [
            'view'      => '/views/producto.php',
            'content'   => 'producto'
        ],
        '/eu/admin-gunea' => [
            'view'      => '/views/zonaAdmin.php',
            'content'   => 'zonaAdmin'
        ],
        '/eu/logout' => [
            'view'      => '/views/logout.php',
            'content'   => 'logout'
        ],
        '/eu/erregistroa' => [
            'view'      => '/views/logup.php',
            'content'   => 'logup'
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
    '/app/artForm01PF' => [
        'view' => '/app/artForm01PF.php',
    ],
    '/app/artForm02PF' => [
        'view' => '/app/artForm02PF.php',
    ],
];

