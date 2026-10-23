<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Home', 'Home::index');
$routes->get('Home/viewmap', 'Home::viewmap');
$routes->get('Home/basemap', 'Home::basemap');
$routes->get('Home/marker', 'Home::marker');

$routes->setAutoRoute(true);