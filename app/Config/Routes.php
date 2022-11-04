<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('administrator', ['filter' => 'role:admin,superadmin'], function ($routes) {
    $routes->get('/computer', 'Computer::index');
    $routes->get('/create-computer', 'Computer::create');
    $routes->post('/create-computer', 'Computer::save');
    $routes->get('/detail-computer/(:num)', 'Computer::detail/$1');
    $routes->delete('/delete-computer/(:num)', 'Computer::delete/$1');

    $routes->get('/printer', 'Printer::index');
    $routes->get('/create-printer', 'Printer::create');
    $routes->post('/create-printer', 'Printer::save');
    $routes->get('/detail-printer/(:num)', 'Printer::detail/$1');
    $routes->delete('/delete-printer/(:num)', 'Printer::delete/$1');

    $routes->get('/network', 'Network::index');
    $routes->get('/create-network', 'Network::create');
    $routes->post('/create-network', 'Network::save');
    $routes->get('/detail-network/(:num)', 'Network::detail/$1');
    $routes->delete('/delete-network/(:num)', 'Network::delete/$1');

    $routes->get('/others', 'Others::index');
    $routes->get('/create-others', 'Others::create');
    $routes->post('/create-others', 'Others::save');
    $routes->get('/detail-others/(:num)', 'Others::detail/$1');
    $routes->delete('/delete-others/(:num)', 'Others::delete/$1');
});




$routes->get('/tinta', 'Stock::tinta');

$routes->get('/form-peminjaman', 'Peminjaman::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
