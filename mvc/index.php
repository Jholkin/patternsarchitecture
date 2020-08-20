<?php

use FastRoute\RouteCollector;

$container = require __DIR__ . '/app/bootstrap.php';

$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
    $r->addRoute('GET', '/', 'Blog\Controller\HomeController');
    $r->addRoute('GET', '/article/{id}', ['Blog\Controller\ArticleController', 'show']);
});

$route = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_REQUEST['REQUEST_URI']);

switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRouter\Dispathcer::METHOD_NOT_ALLOWED:
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];
        $container->call($controller, $parameters);
        break;
}