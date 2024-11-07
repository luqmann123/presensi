<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::login_action');
$routes->get('logout', 'Login::logout');

// rute admin
$routes->get('admin/home', 'Admin\Home::index', ['filter' => 'adminFilter']);
$routes->get('admin/jabatan', 'Admin\Jabatan::index', ['filter' => 'adminFilter']);
$routes->get('admin/jabatan/create', 'Admin\Jabatan::create', ['filter' => 'adminFilter']);
$routes->post('Admin/jabatan/store', 'Admin\Jabatan::store', ['filter' => 'adminFilter']);
$routes->get('Admin/jabatan/edit/(:segment)', 'Admin\Jabatan::edit/$1', ['filter' => 'adminFilter']);  // GET route
$routes->post('Admin/jabatan/edit/(:segment)', 'Admin\Jabatan::edit/$1', ['filter' => 'adminFilter']); // POST route (if needed)
$routes->post('Admin/jabatan/update/(:segment)', 'Admin\Jabatan::update/$1', ['filter' => 'adminFilter']);
$routes->get('Admin/jabatan/delete/(:segment)', 'Admin\Jabatan::delete/$1', ['filter' => 'adminFilter']);





// rute pegawai
$routes->get('pegawai/home', 'Pegawai\Home::index', ['filter' => 'pegawaifilter']);
