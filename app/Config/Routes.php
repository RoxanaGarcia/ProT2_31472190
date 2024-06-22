<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
 $routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('sesion', 'Home::registrar');
$routes->get('cuenta', 'Home::acceder');
$routes->get('nosotros', 'Home::nosotros');
$routes->get('acerca', 'Home::acerca');
