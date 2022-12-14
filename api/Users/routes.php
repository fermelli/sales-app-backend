<?php

/**
 * Routes for the application
 *
 * @var \Illuminate\Routing\Router $router
*/

$router->group(
    [
        'middleware' => 'auth:api',
    ],
    function () use ($router) {
        $router->get('/users', 'UserController@getAll');
        $router->get('/users/{id}', 'UserController@getById');
        $router->post('/users', 'UserController@create');
        $router->put('/users/{id}', 'UserController@update');
        $router->delete('/users/{id}', 'UserController@delete');
    }
);
