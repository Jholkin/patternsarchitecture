<?php

use FastRouter\RouteController;

$container = require __DIR__ . '/app/bootstrap.php';

// Por revisar

$dispatcher = FastRouter\simpleDispatcher(function (RouteController $r) {
    $r->addRoute('GET', 'BetHouse\negocio\BetManagement');
    $r->addRoute('GET', '/games/{id}', ['BetHouse\negocio\BetManagement', 'show']);
});

$route = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispartcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];
        $container->call($controller, $paremeters);
        break;
}