<?php

use App\Controllers\BaseController;
use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

<<<<<<< HEAD
$routes->get('firebase-test/send-data', 'FirebaseTest::sendData');
//$routes->post('firebase-test/send-data', 'FirebaseTest::sendData');
$routes->get('firebase-test/fetch-data', 'FirebaseTest::fetchData');
//$routes->get('firebase-test/fetch-data-json', 'FirebaseTest::fetchDataJson');


//Home Page
// $routes->get('home', 'Home::index');



=======
>>>>>>> 3a6179a23b281024741b27a42226f0c5599bac99
//////Register///////
$routes->get('register', 'Auth\Register::index',['filter' => 'authRedirect']); //Register is a controller
$routes->post('register/save', 'Auth\Register::save'); //Register is a controller

//////Login///////

$routes->get('login', 'Auth\Login::login_index',['filter' => 'authRedirect']); //Login is a controller
$routes->post('login', 'Auth\Login::login'); //Login is a controller

///// Frontend Home////////////////
<<<<<<< HEAD
 $routes->get('home', 'Frontend\HomeController::home_index'); //Login is a controller
=======
$routes->get('home', 'Frontend\HomeController::home_index'); //Login is a controller
>>>>>>> 3a6179a23b281024741b27a42226f0c5599bac99


////////Backend Home///////////////
$routes->get('admin_dashboard', 'Backend\DashboardController::index', ['filter' => 'authGuard']); //Login is a controller
$routes->get('logout', 'Auth\Login::logout');

$routes->get('/dogfoodproduct/create', 'Backend\DogFoodProductController::create');
$routes->post('/dogfoodproduct/store', 'Backend\DogFoodProductController::store');
$routes->get('dogfoodproduct/delete/(:num)', 'Backend\DashboardController::delete/$1');
$routes->get('dogfoodproduct/toggle/(:num)', 'Backend\DashboardController::toggle/$1');

<<<<<<< HEAD
// Header management routes
$routes->get('headers_listing', 'Backend\HeaderController::index', ['filter' => 'authGuard']);
$routes->post('headers_listing', 'Backend\HeaderController::index', ['filter' => 'authGuard']);
$routes->get('test', 'Backend\HeaderController::test', ['filter' => 'authGuard']);
$routes->get('add_new_header', 'Backend\HeaderController::create', ['filter' => 'authGuard']);
$routes->post('store_header', 'Backend\HeaderController::store', ['filter' => 'authGuard']);
$routes->get('edit_header/(:num)', 'Backend\HeaderController::edit/$1', ['filter' => 'authGuard']);
$routes->post('update_header/(:num)', 'Backend\HeaderController::update/$1', ['filter' => 'authGuard']);
$routes->get('header/toggle/(:num)', 'Backend\HeaderController::toggle/$1', ['filter' => 'authGuard']);
$routes->get('delete_header/(:num)', 'Backend\HeaderController::delete/$1', ['filter' => 'authGuard']);



=======
>>>>>>> 3a6179a23b281024741b27a42226f0c5599bac99



