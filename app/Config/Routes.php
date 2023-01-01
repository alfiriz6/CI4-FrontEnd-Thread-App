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
$routes->get('/', 'Login::index');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/logout', 'Login::logout');
$routes->get('/error', 'Login::error');

$routes->get('/admin_page', 'AdminPage::admin_page',);
$routes->get('/create_thread', 'AdminPage::create_thread_page');
$routes->post('/create_thread', 'AdminPage::create_thread');
$routes->get('/update_thread/(:num)', 'AdminPage::update_thread_page/$1');
$routes->post('/update_thread/(:num)', 'AdminPage::update_thread/$1');
$routes->get('/account_page', 'AdminPage::account_page',);
$routes->get('/delete_thread/(:num)', 'AdminPage::delete_thread/$1');
$routes->get('/delete_account/(:num)', 'AdminPage::delete_account/$1');

$routes->get('home', 'UserPage::index');
$routes->get('/user_page', 'UserPage::user_page');
$routes->get('/profil', 'UserPage::user_profil');
// $routes->get('/update_account/(:num)', 'UserPage::update_account_page/$1');
// $routes->post('/update_account/(:num)', 'UserPage::update_account/$1');
$routes->get('/update_profil', 'UserPage::get_id_user');
$routes->post('/update_profil/(:num)', 'UserPage::update_account/$1');
$routes->get('/about', 'UserPage::about');

$routes->get('/register', 'Register::register');
$routes->post('/register/process', 'Register::index');

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
