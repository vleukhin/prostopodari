<?php

use Slim\Http\Request;
use Slim\Http\Response;

define('ROOT_DIR', __DIR__ . '/../');

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();

$config = require '../config/app.php';
$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

require '../app/lib/dependencies.php';

$app->get('/', function (Request $request, Response $response) {
    return $this->blade->render('landing');
});

$app->post('/call-me', function (Request $request, Response $response){
    $phone = $request->getParam('phone');
    $name = $request->getParam('name');

    $result = mail(getenv('EMAIL'), 'Вас просят перезвонить с лендинга ПростоПодари', "Имя: $name <br/> Телефон: $phone");

    return $response->withRedirect('/');
});

$app->run();