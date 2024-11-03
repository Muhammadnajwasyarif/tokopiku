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
$routes->get('/backend', 'Coba::admin');
$routes->get('/produk', 'Coba::produk');
$routes->get('/backend/produk', 'Coba::produkback');
$routes->get('/backend/user', 'Coba::user');
$routes->get('/backend/produk/tambah', 'Coba::tambahprod');
$routes->get('/backend/produk/hapus/(:any)', 'Coba::hapusprod/$1');
$routes->get('/backend/user/hapus/(:any)', 'Coba::hapususer/$1');
$routes->get('/backend/produk/edit/(:any)', 'Coba::editPro/$1');
$routes->post('/simpanprod', 'Coba::addpro');
$routes->post('/updateprod', 'Coba::updateProd');
