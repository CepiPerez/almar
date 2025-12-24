<?php

// ACA GUARDAMOS TODAS LAS CONFIGURACIONES 
// PARA NO TENER QUE EDITAR LAS PAGINAS 

$config = [

    // CARATULA PRINCIPAL DE LAS PAGINAS
    "hero" => [
        // IMAGENES DE LA CARATULA
        // SI TIENE MAS DE UNA SE ACTIVA EL CAROUSEL ANIMADO
        "images" => [
            // PAGINA INICIO
            "home" => [
                'heroimg1.jpg',
                'heroimg2.jpg',
                'heroimg3.jpg',
                'heroimg4.jpg'
            ],
            // PAGINA HABITACIONES
            "rooms" => [
                'heroimg1.jpg'
            ],
            // PAGINA GALERIA
            "gallery" => [
                'heroimg2.jpg'
            ],
            // PAGINA MARAGOGI
            "maragogi" => [
                'heroimg4.jpg'
            ],
            // PAGINA CONTACTO
            "contact" => [
                'heroimg3.jpg'
            ]
        ],

        // INDICADOR DE SCROLL EN LA CARATULA
        // (puede ser true o false)
        "scroll" => [
            // PAGINA INICIO
            "home" => true,
            // PAGINA GALERIA
            "gallery" => false,
            // PAGINA HABITACIONES
            "rooms" => false,
            // PAGINA MARAGOGI
            "maragogi" => false,
            // PAGINA CONTACTO
            "contact" => false,
        ],

        // ALTURA DE LA CARATULA
        // (porcentaje de alto que ocupa en la pantalla)
        "height" => [
            // PAGINA INICIO
            "home" => 100,
            // PAGINA GALERIA
            "gallery" => 75,
            // PAGINA HABITACIONES
            "rooms" => 75,
            // PAGINA MARAGOGI
            "maragogi" => 75,
            // PAGINA CONTACTO
            "contact" => 75,
        ],
    ],

    // FOTOS DE LAS INSTALACIONES
    "gallery_images" => [
        'gallery/frente1.jpg',
        'gallery/frente2.jpg',
        'gallery/frente3.jpg',
        'gallery/estar1.jpg',
        'gallery/estar2.jpg',
        'gallery/estar3.jpg',
        'gallery/comedor1.jpg',
        'gallery/comedor2.jpg',
        'gallery/comedor3.jpg',
        'gallery/comedor4.jpg'
    ],

    // FOTOS DE LAS HABITACIONES
    "room_images" => [
        1 => [
            'rooms/1_1.jpg',
            'rooms/1_2.jpg',
            'rooms/1_3.jpg',
            'rooms/1_4.jpg',
            'rooms/1_5.jpg',
            'rooms/1_6.jpg',
            'rooms/1_7.jpg',
            'rooms/1_8.jpg',
            'rooms/1_9.jpg'
        ],
        2 => [
            'rooms/2_1.jpg',
            'rooms/2_2.jpg',
            'rooms/2_3.jpg',
            'rooms/2_4.jpg',
            'rooms/2_5.jpg',
            'rooms/2_6.jpg',
            'rooms/2_7.jpg'
        ],
        3 => [
            'rooms/3_1.jpg',
            'rooms/3_2.jpg',
            'rooms/3_3.jpg',
            'rooms/3_4.jpg',
            'rooms/3_5.jpg',
            'rooms/3_6.jpg',
            'rooms/3_7.jpg',
            'rooms/3_8.jpg',
            'rooms/3_9.jpg',
            'rooms/3_10.jpg',
            'rooms/3_11.jpg'
        ],
        4 => [
            'rooms/4_1.jpg',
            'rooms/4_2.jpg',
            'rooms/4_3.jpg',
            'rooms/4_4.jpg',
            'rooms/4_5.jpg',
            'rooms/4_6.jpg',
            'rooms/4_7.jpg',
            'rooms/4_8.jpg',
            'rooms/4_9.jpg',
            'rooms/4_10.jpg',
            'rooms/4_11.jpg'
        ],
        5 => [
            'rooms/5_1.jpg',
            'rooms/5_2.jpg',
            'rooms/5_3.jpg',
            'rooms/5_4.jpg',
            'rooms/5_5.jpg',
            'rooms/5_6.jpg',
            'rooms/5_7.jpg',
            'rooms/5_8.jpg',
            'rooms/5_9.jpg',
            'rooms/5_10.jpg'
        ]
    ],

    // FOTOS DE MARAGOGI
    "maragogi_images" => [
        'location1.jpg',
        'location2.jpg',
        'location3.jpg',
        'location4.jpg',
        'location5.jpg',
        'location6.jpg'
    ],

];
