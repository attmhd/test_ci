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