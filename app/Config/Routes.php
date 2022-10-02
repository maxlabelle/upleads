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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->add('/auth/login', 'Auth::login');
$routes->add('/auth/register', 'Auth::register');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/auth/terms', 'Auth::terms');

$routes->add('a/(:segment)/login', 'Auth::login/$1');
$routes->add('a/(:segment)/register', 'Auth::register/$1');
$routes->get('a/(:segment)/terms', 'Auth::terms/$1');
$routes->get('a/(:segment)/home', 'Routing::merchantHome/$1');

$routes->get('a/(:segment)/logo', 'Routing::merchantImage/logo/$1');
$routes->get('a/(:segment)/bg/', 'Routing::merchantImage/bg/$1');
$routes->get('a/(:segment)/logo/(:segment)', 'Routing::merchantImage/logo/$1/$2');
$routes->get('a/(:segment)/bg/(:segment)', 'Routing::merchantImage/bg/$1/$2');

$routes->get('r/(:segment)', 'Routing::redirect/$1');
$routes->get('v/(:segment)', 'Routing::tracking/$1/visit');
$routes->get('o/(:segment)', 'Routing::tracking/$1/order');
$routes->get('p/(:segment)/(:segment)/(:segment)', 'Routing::pixel/$1/$2/$3');

$routes->get('page/(:segment)', 'Home::view/$1');
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
