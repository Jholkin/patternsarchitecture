<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/clients', ['uses' => 'ClientController@index']);
    $router->get('/clients/{id}', ['uses' => 'ClientController@show']);
    $router->post('/clients', ['uses' => 'ClientController@create']);
    $router->put('/clients/{id}', ['uses' => 'ClientController@update']);
    $router->delete('/clientes', ['uses' => 'ClientController@delete']);

    $router->get('/games', ['uses' => 'GameController@index']);
    $router->get('/games/{id}', ['uses' => 'GameController@show']);
    $router->post('/games', ['uses' => 'GameController@create']);
    $router->put('/games{id}', ['uses' => 'GameController@update']);
    $router->delete('/games', ['uses' => 'GameController@delete']);
});