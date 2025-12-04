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
                'heroimg3.jpg'
            ],
            // PAGINA HABITACIONES
            "rooms" => [
                'heroimg1.jpg'
            ],
            // PAGINA MARAGOGI
            "maragogi" => [
                'heroimg2.jpg'
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
            // PAGINA HABITACIONES
            "rooms" => 75,
            // PAGINA MARAGOGI
            "maragogi" => 75,
            // PAGINA CONTACTO
            "contact" => 75,
        ],
    ],

    // HABITACIONES
    "rooms" => [],

];
