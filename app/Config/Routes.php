<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');


/**
 * Routes AUTH
 */

$routes->group('auth', function($routes){
    $routes->post('login', 'Login::auth');
    $routes->get('logout', 'Login::logout');

});