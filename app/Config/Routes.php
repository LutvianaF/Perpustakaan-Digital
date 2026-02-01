<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//LOGIN, REGISTER, LOGOUT
$routes->get('/login', 'Auth\LoginController::index');
$routes->post('/login', 'Auth\LoginController::prosesLogin');
$routes->get('/register', 'Auth\RegisterController::index');
$routes->post('/register', 'Auth\RegisterController::store');
$routes->get('/logout', 'Auth\LogoutController::index');

// ADMIN
$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'Admin\DashboardController::index');

    $routes->get('buku', 'Admin\BukuController::index');
    $routes->get('buku/create', 'Admin\BukuController::create');
    $routes->post('buku/store', 'Admin\BukuController::store');
    $routes->get('buku/edit/(:num)', 'Admin\BukuController::edit/$1');
    $routes->post('buku/update/(:num)', 'Admin\BukuController::update/$1');
    $routes->get('buku/delete/(:num)', 'Admin\BukuController::delete/$1');

    $routes->get('kategori', 'Admin\KategoriController::index');
    $routes->get('kategori/create', 'Admin\KategoriController::create');
    $routes->post('kategori/store', 'Admin\KategoriController::store');
    $routes->get('kategori/edit/(:num)', 'Admin\KategoriController::edit/$1');
    $routes->post('kategori/update/(:num)', 'Admin\KategoriController::update/$1');
    $routes->get('kategori/delete/(:num)', 'Admin\KategoriController::delete/$1');

    $routes->get('peminjaman', 'Admin\PeminjamanController::index');
    $routes->get('peminjaman/create', 'Admin\PeminjamanController::create');
    $routes->post('peminjaman/store', 'Admin\PeminjamanController::store');
    $routes->get('peminjaman/edit/(:num)', 'Admin\PeminjamanController::edit/$1');
    $routes->post('peminjaman/update/(:num)', 'Admin\PeminjamanController::update/$1');
    $routes->get('peminjaman/delete/(:num)', 'Admin\PeminjamanController::delete/$1');

    $routes->get('laporan', 'Admin\LaporanController::index');
    $routes->post('laporan/filter', 'Admin\LaporanController::filter');
    $routes->get('laporan/cetak', 'Admin\LaporanController::cetak');
});

