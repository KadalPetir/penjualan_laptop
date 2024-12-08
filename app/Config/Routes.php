<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('laptop', function ($routes) {
    $routes->get('/', 'laptop::index');
    $routes->add('create', 'laptop::create');
    $routes->add('edit/(:any)', 'laptop::edit/$1');
    $routes->add('delete/(:any)', 'laptop::delete/$1');
});

$routes->group('suppliers', function ($routes) {
    $routes->get('/', 'suppliers::index');
    $routes->add('create', 'suppliers::create');
    $routes->add('edit/(:any)', 'suppliers::edit/$1');
    $routes->add('delete/(:any)', 'suppliers::delete/$1');
});

$routes->group('sales', function ($routes) {
    $routes->get('/', 'sales::index');
    $routes->add('create', 'sales::create');
    $routes->add('edit/(:any)', 'sales::edit/$1');
    $routes->add('delete/(:any)', 'sales::delete/$1');
});

$routes->group('customers', function ($routes) {
    $routes->get('/', 'customers::index');
    $routes->add('create', 'customers::create');
    $routes->add('edit/(:any)', 'customers::edit/$1');
    $routes->add('delete/(:any)', 'customers::delete/$1');
});

$routes->group('pembayaran', function ($routes) {
    $routes->get('/', 'pembayaran::index');
    $routes->add('create', 'pembayaran::create');
    $routes->add('edit/(:any)', 'pembayaran::edit/$1');
    $routes->add('delete/(:any)', 'pembayaran::delete/$1');
});

$routes->group('pengiriman', function ($routes) {
    $routes->get('/', 'pengiriman::index');
    $routes->add('create', 'pengiriman::create');
    $routes->add('edit/(:any)', 'pengiriman::edit/$1');
    $routes->add('delete/(:any)', 'pengiriman::delete/$1');
});




