<?php

require_once __DIR__ . '/../vendor/autoload.php';

$blade = new \Jenssegers\Blade\Blade([__DIR__ . '/../views'], __DIR__ . '/../cache');
echo $blade->render('landing');