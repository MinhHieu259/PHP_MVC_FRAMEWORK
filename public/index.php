<?php

use app\controllers\SiteController;
use app\core\Application;

require __DIR__.'/../vendor/autoload.php';
$app = new Application(dirname(__DIR__));

// $app->router->get('/', function(){
//     return "Hello World";
// });

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->run();