<?php

$location = isset($_GET['page']) ? $_GET['page'] : '/';

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];

    if (in_array($language, ['es', 'en', 'pt'])) {
        setcookie('user_language', $language, time() + (86400 * 30), '/');

        header('Location: ' . $location);
        exit();
    }
}

header('Location: ' . $location);
exit();
