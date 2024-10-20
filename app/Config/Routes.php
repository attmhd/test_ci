<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//login
// $routes->get('login', 'Login::index');
$routes->post('login', 'Login::authenticate');

//artikel
$routes->get('artikels', 'Artikel::index');
$routes->post('artikels', 'Artikel::create');
$routes->get('artikels/(:segment)', 'Artikel::show/$1');
$routes->delete('artikels/(:segment)', 'Artikel::delete/$1');
$routes->put('artikels/(:segment)', 'Artikel::update/$1');

//user
$routes->get('users', 'User::index');
$routes->get('users/(:segment)', 'User::show/$1');
// $routes->post('users', 'User::create');
// $routes->delete('users/(:segment)', 'User::delete/$1');
// $routes->put('users/(:segment)', 'User::update/$1');