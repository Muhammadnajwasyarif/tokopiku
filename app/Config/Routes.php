<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Coba::index');
$routes->get('/produk', 'Coba::produk');
$routes->get('/fitur', 'Coba::fitur');
$routes->get('/produk/detailproduk/(:any)', 'Coba::detail/$1');
$routes->get('/keranjang/edit/(:any)', 'Coba::edit/$1');
$routes->post('/keranjang/update', 'Coba::update');
$routes->post('/keranjang/beli', 'Coba::beli');
$routes->post('/keranjang/tambah', 'Coba::tambah');
$routes->post('/keranjang/add', 'Coba::add');
$routes->get('/keranjang/hapus/(:any)', 'Coba::hapus/$1');
$routes->get('/halo', 'Coba::coba');
$routes->get('user/(:any)', 'Coba::user/$1');
// app/Config/Routes.php
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'login']);

$routes->get('admin/dashboard','DashboardAdmin::index');
$routes->get('admin/produk','ProdukAdmin::index');

// $routes->group('admin', function($routes)){
//     $routes
// };


// $routes->get('login','AuthController/login');
$routes->get('usere(:any)', 'Coba::user2/$1');
