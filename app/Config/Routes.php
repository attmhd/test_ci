<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



//artikel
$routes->get('artikels', 'Artikel::index');
$routes->post('artikels', 'Artikel::create');
$routes->get('artikels/(:segment)', 'Artikel::show/$1');
$routes->delete('artikels/(:segment)', 'Artikel::delete/$1');
$routes->put('artikels/(:segment)', 'Artikel::update/$1');

//login
$routes->get('login', 'UserController::index');
//logout
$routes->get('logout', 'UserController::logout');
//register view
$routes->get('register', 'UserController::register_view');
//register user
$routes->post('register', 'UserController::register');
//auth
$routes->post('auth', 'UserController::auth');


//dashboard
$routes->get('dashboard', 'Dashboard::index');