<?php

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;
use SONFin\Application;
use SONFin\Plugins\RoutePlugin;
use SONFin\ServiceContainer;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin());

$app->get('/', function (RequestInterface $request) {
    var_dump($request->getUri());die();
    echo "Hello World! DIOGO";
});

$app->get('/teste/{name}/{id}', function (ServerRequestInterface $request) {
    echo "Hello World! testdfdfe";
    echo "<br/>";
    echo $request->getAttribute('name');
    echo "<br/>";
    echo $request->getAttribute('id');
});

$app->start();