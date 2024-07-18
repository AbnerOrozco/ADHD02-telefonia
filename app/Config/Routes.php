<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Clientes::Clientes');
$routes->get('/ver_clientes', 'Clientes::Clientes');
$routes->get('/ver_Lineas', 'LineasTelefonicas::LineasTelefonicas');
$routes->get('/ver_planes', 'Planes::planes');