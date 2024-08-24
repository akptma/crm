<?php

use CodeIgniter\Router\RouteCollection;

// Page Error
$routes->get('error', function() {
    return view('pageError/404');
});


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Authentication::Login');
$routes->post('/login', 'Authentication::LoginProc');
$routes->get('/logout', 'Authentication::LogoutProc');

$routes->group('', ['filter' => 'auth'], function($routes) {

    // home page 
    $routes->get('/home', 'Home::index');

    // users
    $routes->get('/users', 'Users::index');
    $routes->get('/users/create', 'Users::create');
    $routes->post('/users/create', 'Users::createProc');
    $routes->get('/users/update/(:segment)', 'Users::update/$1');
    $routes->post('/users/update/(:segment)', 'Users::updateProc/$1');
    $routes->get('/users/destroy/(:segment)', 'Users::destroy/$1');
    
    // menu
    $routes->get('/menu', 'Menu::index');
    $routes->get('/menu/create', 'Menu::create');


});


