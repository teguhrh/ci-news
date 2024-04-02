<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Tentang::index');
$routes->setAutoRoute(true);
//paud
$routes->get('/paud', 'PaudController::tess');
$routes->get('/paud/formulir', 'PaudController::formulir');
$routes->post('/paud/store', 'PaudController::store');

$routes->get('paud/edit/(:segment)', 'PaudController::edit/$1');
$routes->post('paud/update/(:segment)', 'PaudController::update/$1');
$routes->get('paud/delete/(:segment)', 'PaudController::delete/$1');

//datamurid
$routes->get('/datamurid', 'DataMuridController::index');
$routes->get('/datamurid/add', 'DataMuridController::add');
$routes->post('/datamurid/store', 'DataMuridController::store');

$routes->get('datamurid/edit/(:segment)', 'DataMuridController::edit/$1');
$routes->post('datamurid/update/(:segment)', 'DataMuridController::update/$1');
$routes->get('datamurid/delete/(:segment)', 'DataMuridController::delete/$1');

//bukuinduk
$routes->get('/induk', 'IndukController::index');
$routes->get('/induk/create', 'IndukController::create');
$routes->post('/induk/store', 'IndukController::store');

$routes->get('induk/edit/(:segment)', 'IndukController::edit/$1');
$routes->post('induk/update/(:segment)', 'IndukController::update/$1');
$routes->get('induk/delete/(:segment)', 'IndukController::delete/$1');

//FORMULIR
$routes->get('/formulir', 'FormulirController::index');
$routes->get('/formulir/create', 'FormulirController::create');
$routes->post('/formulir/store', 'FormulirController::store');
$routes->get('/formulir/print', 'FormulirController::print');

$routes->get('formulir/edit/(:segment)', 'FormulirController::edit/$1');
$routes->post('formulir/update/(:segment)', 'FormulirController::update/$1');
$routes->get('formulir/delete/(:segment)', 'FormulirController::delete/$1');

//FORMULIRR
$routes->get('/formulirr', 'FormulirrController::index');
$routes->get('/formulirr/create', 'FormulirrController::create');
$routes->post('/formulirr/store', 'FormulirrController::store');

$routes->get('formulirr/edit/(:segment)', 'FormulirrController::edit/$1');
$routes->post('formulirr/update/(:segment)', 'FormulirrController::update/$1');
$routes->get('formulirr/delete/(:segment)', 'FormulirrController::delete/$1');

//FORMULIRRR
$routes->get('/formulirrr', 'FormulirrrController::index');
$routes->get('/formulirrr/create', 'FormulirrrController::create');
$routes->post('/formulirrr/store', 'FormulirrrController::store');

$routes->get('formulirrr/edit/(:segment)', 'FormulirrrController::edit/$1');
$routes->post('formulirrr/update/(:segment)', 'FormulirrrController::update/$1');
$routes->get('formulirrr/delete/(:segment)', 'FormulirrrController::delete/$1');

//FORM
$routes->get('/form', 'FormController::index');
$routes->get('/form/create', 'FormController::create');
$routes->post('/form/store', 'FormController::save');

$routes->get('form/edit/(:segment)', 'FormController::edit/$1');
$routes->post('form/update/(:segment)', 'FormController::update/$1');
$routes->get('form/delete/(:segment)', 'FormController::delete/$1');


// app/Config/Routes.php
$routes->get('absensi/guestview', 'AbsensiController::guestView');
$routes->get('induk/guestview', 'IndukController::guestView');

$routes->get('absensi', 'AbsensiController::index');
$routes->get('absensi/create', 'AbsensiController::create');
$routes->post('absensi/store', 'AbsensiController::store');
$routes->get('absensi/edit/(:num)', 'AbsensiController::edit/$1');
$routes->post('absensi/update/(:num)', 'AbsensiController::update/$1');

$routes->post('absensi/update/(:num)', 'AbsensiController::update/$1');
$routes->get('absensi/delete/(:num)', 'AbsensiController::delete/$1');


// app/Config/Routes.php

$routes->get('rekap/guestview', 'RekapController::guestView');

$routes->get('rekap', 'RekapController::index');
$routes->get('rekap/create', 'RekapController::create');
$routes->post('rekap/store', 'RekapController::store');
$routes->get('rekap/edit/(:num)', 'RekapController::edit/$1');
$routes->post('rekap/update/(:num)', 'RekapController::update/$1');
$routes->get('rekap/delete/(:num)', 'RekapController::delete/$1');

//register
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
