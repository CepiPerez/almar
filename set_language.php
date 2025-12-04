<?php
if (isset($_GET['lang'])) {
    $language = $_GET['lang'];

    // Validar que el idioma sea uno permitido (ej. 'es', 'en', 'pt')
    if (in_array($language, ['es', 'en', 'pt'])) {
        // Establecer la cookie 'user_language'. Caduca en 30 días (86400 * 30 segundos) y está disponible para todo el sitio ('/').
        setcookie('user_language', $language, time() + (86400 * 30), '/');
        // Redirigir al usuario de vuelta a la página principal o a donde sea necesario
        header('Location: index.php');
        exit();
    }
}

// Si se accede directamente sin un idioma válido, redirigir o mostrar error
header('Location: index.php');
exit();
