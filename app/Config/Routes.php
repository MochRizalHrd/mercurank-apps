<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Login
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/loginProcess', 'Auth::loginProcess');
$routes->get('/auth/logout', 'Auth::logout');

//Menu Dashboard
$routes->get('/dashboard', 'Dashboard::index');

//Menu Data Mahasiswa
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/store', 'Mahasiswa::store');
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->get('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');

//Menu Data Kriteria
$routes->get('/kriteria', 'Kriteria::index');
$routes->get('/kriteria/create', 'Kriteria::create');
$routes->post('/kriteria/store', 'Kriteria::store');
$routes->get('/kriteria/edit/(:num)', 'Kriteria::edit/$1');
$routes->post('/kriteria/update/(:num)', 'Kriteria::update/$1');
$routes->get('/kriteria/delete/(:num)', 'Kriteria::delete/$1');

// Menu Pengguna
$routes->get('/pengguna', 'Pengguna::index');
$routes->get('/pengguna/create', 'Pengguna::create');
$routes->post('/pengguna/store', 'Pengguna::store');
$routes->get('/pengguna/edit/(:num)', 'Pengguna::edit/$1');
$routes->post('/pengguna/update/(:num)', 'Pengguna::update/$1');
$routes->get('/pengguna/delete/(:num)', 'Pengguna::delete/$1');
