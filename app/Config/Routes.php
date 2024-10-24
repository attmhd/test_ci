<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function() {
    return redirect()->to('/login');
});

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
$routes->get('dashboard', 'DashboardController::index');


//artikel
$routes->get('dashboard/artikel', 'ArtikelController::index');
$routes->get('dashboard/artikel/add', 'ArtikelController::add_form');
$routes->post('dashboard/artikel/add', 'ArtikelController::create');
$routes->get('dashboard/artikel/edit/(:segment)', 'ArtikelController::edit_form/$1');
$routes->post('dashboard/artikel/edit/(:segment)', 'ArtikelController::update/$1');
$routes->get('dashboard/artikel/delete/(:segment)', 'ArtikelController::delete/$1');

//editor
$routes->get('dashboard/editor', 'EditorController::index');
$routes->get('dashboard/editor/add', 'EditorController::add_form');
$routes->post('dashboard/editor/add', 'EditorController::create');
$routes->get('dashboard/editor/edit/(:segment)', 'EditorController::edit_form/$1');
$routes->post('dashboard/editor/edit/(:segment)', 'EditorController::update/$1');
$routes->get('dashboard/editor/delete/(:segment)', 'EditorController::delete/$1');