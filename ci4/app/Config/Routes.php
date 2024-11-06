<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['filter' => 'LoginFilter']);
$routes->get('/login', 'Login::index');
$routes->get('/siswa', 'SiswaController::index');
$routes->get('/siswa/create', 'SiswaController::create');
$routes->post('/siswa/store', 'SiswaController::store');
$routes->get('/siswa/edit/(:num)', 'SiswaController::edit/$1');
$routes->post('/siswa/update/(:num)', 'SiswaController::update/$1');
$routes->get('/siswa/delete/(:num)', 'SiswaController::delete/$1');
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

