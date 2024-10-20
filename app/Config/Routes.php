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