<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

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


//artikel
$routes->get('dashboard/artikel', 'ArtikelController::index');
$routes->get('dashboard/artikel/add', 'ArtikelController::add_form');
$routes->post('dashboard/artikel/add', 'ArtikelController::create');
$routes->get('dashboard/artikel/edit/(:segment)', 'ArtikelController::edit_form/$1');
$routes->post('dashboard/artikel/edit/(:segment)', 'ArtikelController::update/$1');