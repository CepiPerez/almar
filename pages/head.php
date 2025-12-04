<?php
$default_language = 'pt';
$current_language = $default_language;

// Comprueba si la cookie 'user_language' está establecida y usa su valor
if (isset($_COOKIE['user_language'])) {
    $current_language = $_COOKIE['user_language'];
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Pousada Almar | Maragogi</title>

    <!-- Website icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon-16x16.png">
    <link rel="manifest" href="../assets/site.webmanifest">

    <!-- SEO -->
    <meta name="description" content="<?php echo ($language['head']['meta_description'][$current_language]); ?>">
    <link rel="canonical" href="https://TUDOMINIO.com/en/">

    <!-- Open Graph -->
    <meta property="og:title" content="Pousada Almar | Maragogi" />
    <meta property="og:description" content="<?php echo ($language['head']['meta_description'][$current_language]); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="ALMAR" />
    <meta property="og:url" content="https://TUDOMINIO.com/en/" />
    <meta property="og:image" content="../assets/screenshot.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Pousada Almar | Maragogi" />
    <meta name="twitter:description" content="<?php echo ($language['head']['meta_description'][$current_language]); ?>" />
    <meta name="twitter:image" content="../assets/screenshot.jpg" />
    <meta name="twitter:url" content="https://TUDOMINIO.com/en/" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600&amp;display=swap" />

    <link href="assets/remixicon/remixicon.css" rel="stylesheet">

    <!-- Tailwind config file -->
    <script src="../assets/js/tailwind.config.js"></script>

    <!-- AlpineJS Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Application styles -->
    <link rel="stylesheet" href="../assets/css/app.css">
</head>