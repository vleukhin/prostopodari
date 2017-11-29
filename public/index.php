<?php

require_once __DIR__ . '/../vendor/autoload.php';

if (!empty($_POST['email'])) {
    $file = __DIR__ . '/../storage/list.txt';
    if ($email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        @file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
    }
} else {
    $blade = new \Jenssegers\Blade\Blade([__DIR__ . '/../views'], __DIR__ . '/../cache');
    echo $blade->render('landing');
}