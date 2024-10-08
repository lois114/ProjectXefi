<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Base::index');

$routes->get('/inscription', 'Base::inscription');


$routes->get('/update/(:num)', 'SignupController::update/$1');
$routes->get('/update_moins_1/(:num)', 'SignupController::update_moins_1/$1');
$routes->get('/detail/(:num)', 'SignupController::detail/$1');

$routes->get('/deletehisto', 'SignupController::delete_histo');

$routes->get('/delete/(:num)', 'SignupController::delete/$1');
$routes->get('/historique', 'SignupController::historique');

$routes->get('/trello', 'SignupController::Affiche');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');

$routes->post('/update_note/(:num)', 'SignupController::update_note/$1');

$routes->get('/testdb/(:num)', 'SignupController::detail_test/$1');

$routes->get('/testdb', 'Base::index_pdf');
$routes->post('/export', 'Base::export',['as' => 'export']);


$routes->get('/generateFileToPdf/(:num)', 'SignupController::generateFileToPDF/$1');






