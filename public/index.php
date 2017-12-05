<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();

$blade = new \Jenssegers\Blade\Blade([__DIR__ . '/../views'], __DIR__ . '/../cache');
echo $blade->render('landing');