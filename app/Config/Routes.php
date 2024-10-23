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


//dashboard
$routes->get('dashboard', 'Dashboard::index');
//add artikel
$routes->get('dashboard/add', 'Dashboard::add_form');
//create artikel
$routes->post('dashboard/add', 'Dashboard::create');
//delete artikel
$routes->get('/dashboard/delete/(:segment)', 'Dashboard::delete/$1');