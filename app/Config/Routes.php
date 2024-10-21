<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



//artikel
$routes->get('artikels', 'ArtikelController::index');
$routes->post('artikels', 'ArtikelController::create');
$routes->get('artikels/(:segment)', 'ArtikelController::show/$1');
$routes->delete('artikels/(:segment)', 'ArtikelController::delete/$1');
$routes->put('artikels/(:segment)', 'ArtikelController::update/$1');


//register user
$routes->post('register', 'UserController::register');
//auth
$routes->post('auth', 'UserController::auth');

