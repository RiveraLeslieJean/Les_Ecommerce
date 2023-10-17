<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/home', 'PetController::home');
$routes->get('/PetDetails/(:any)', 'PetController::PetDetails/$1');
// $routes->get('/admin', 'Admin::index');

//Login_Reguster_Users
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Users::index', ['Filter' => 'Noauth']);
$routes->get('logout', 'Users::logout');
$routes->match(['get','post'],'register', 'Users::register', ['Filter' => 'Noauth']);
$routes->get('home', 'pethome::index',['filter' => 'Auth']);
$routes->get('/', 'Home::index');


//admin
$routes->get('/admin', 'MainController::admin', ['Filter' => 'AuthGuard']);
$routes->post('/save', 'MainController::save');
$routes->post('/logout', 'Admin::logout');
$routes->get('/delete/(:any)', 'MainController::delete/$1');
$routes->get('/edit/(:any)', 'MainController::edit/$1');
