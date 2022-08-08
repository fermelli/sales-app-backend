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
        // Logout
        $router->post('/logout', 'LoginController@logout');
    }
);
