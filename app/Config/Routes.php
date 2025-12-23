<?php

use App\Controllers\BaseController;
use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('firebase-test/send-data', 'FirebaseTest::sendData');
//$routes->post('firebase-test/send-data', 'FirebaseTest::sendData');
// $routes->get('firebase-test/fetch-data', 'FirebaseTest::fetchData');
//$routes->get('firebase-test/fetch-data-json', 'FirebaseTest::fetchDataJson');


//Home Page
// $routes->get('home', 'Home::index');



//////Register///////
$routes->get('register', 'Auth\Register::index',['filter' => 'authRedirect']); //Register is a controller
$routes->post('register/save', 'Auth\Register::save'); //Register is a controller

//////Login///////

$routes->get('login', 'Auth\Login::login_index',['filter' => 'authRedirect']); //Login is a controller
$routes->post('login', 'Auth\Login::login'); //Login is a controller

///// Frontend Home////////////////
 $routes->get('home', 'Frontend\HomeController::home_index');
 $routes->get('post/(:num)', 'Frontend\HomeController::post_single/$1');
 $routes->post('store_consultation', 'Frontend\HomeController::store_consultation');
 $routes->get('image_galary_listing', 'Frontend\HomeController::image_galary_listing');


 ////// Contact Us //////
 $routes->get('contact_us', 'Frontend\ContactUsController::index');
//  $routes->get('contact_us', 'Frontend\ContactUsController::index');
 $routes->post('contact_us', 'Frontend\ContactUsController::store');

////////Backend Home///////////////
$routes->get('admin_dashboard', 'Backend\DashboardController::index', ['filter' => 'authGuard']); //Login is a controller
$routes->get('logout', 'Auth\Login::logout');

// Profile Picture Management
$routes->get('my_profile', 'Backend\ProfilePictureController::index', ['filter' => 'authGuard']); 
$routes->post('profile/update', 'Backend\ProfilePictureController::update', ['filter' => 'authGuard']);
$routes->post('update_profile/(:num)', 'Backend\ProfilePictureController::update_profile/$1', ['filter' => 'authGuard']);
 


$routes->get('/dogfoodproduct/create', 'Backend\DogFoodProductController::create');
$routes->post('/dogfoodproduct/store', 'Backend\DogFoodProductController::store');
$routes->get('dogfoodproduct/delete/(:num)', 'Backend\DashboardController::delete/$1');
$routes->get('dogfoodproduct/toggle/(:num)', 'Backend\DashboardController::toggle/$1');

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

// Post management routes
$routes->get('posts_listing', 'Backend\PostController::index', ['filter' => 'authGuard']);
$routes->get('add_new_post', 'Backend\PostController::create', ['filter' => 'authGuard']);
$routes->post('store_post', 'Backend\PostController::store', ['filter' => 'authGuard']);
$routes->get('edit_post/(:num)', 'Backend\PostController::edit/$1', ['filter' => 'authGuard']);
$routes->post('update_post/(:num)', 'Backend\PostController::update/$1', ['filter' => 'authGuard']);
$routes->get('delete_post/(:num)', 'Backend\PostController::delete/$1', ['filter' => 'authGuard']);

// Package management routes
$routes->get('packages_listing', 'Backend\PackageController::index', ['filter' => 'authGuard']);
$routes->get('add_new_package', 'Backend\PackageController::create', ['filter' => 'authGuard']);
$routes->post('store_package', 'Backend\PackageController::store', ['filter' => 'authGuard']);
$routes->get('edit_package/(:num)', 'Backend\PackageController::edit/$1', ['filter' => 'authGuard']);
$routes->post('packages/(:num)/update', 'Backend\PackageController::update/$1', ['filter' => 'authGuard']);
$routes->get('delete_package/(:num)', 'Backend\PackageController::delete/$1', ['filter' => 'authGuard']);

// SMTP Settings routes
$routes->get('smtp_settings', 'Backend\SmtpSettingsController::index', ['filter' => 'authGuard']);
$routes->post('smtp_settings/save', 'Backend\SmtpSettingsController::save', ['filter' => 'authGuard']);
$routes->get('smtp_settings/test', 'Backend\SmtpSettingsController::test', ['filter' => 'authGuard']);

// Gallery routes
$routes->get('gallery_listing', 'Backend\GalleryController::index', ['filter' => 'authGuard']);
$routes->get('add_gallery', 'Backend\GalleryController::create', ['filter' => 'authGuard']);
$routes->post('store_gallery', 'Backend\GalleryController::store', ['filter' => 'authGuard']);
$routes->get('edit_gallery/(:num)', 'Backend\GalleryController::edit/$1', ['filter' => 'authGuard']);
$routes->post('update_gallery/(:num)', 'Backend\GalleryController::update/$1', ['filter' => 'authGuard']);
$routes->get('delete_gallery/(:num)', 'Backend\GalleryController::delete/$1', ['filter' => 'authGuard']);

// Consultation management routes
$routes->get('consulting_services_list', 'Backend\HeaderController::consulting_listing', ['filter' => 'authGuard']);

// Contact Us Forms routes
$routes->get('list_contact_us_forms', 'Frontend\ContactUsController::contact_us_forms_listing', ['filter' => 'authGuard']);
$routes->post('list_contact_us_forms/save', 'Frontend\StoreAddressController::new_address_store', ['filter' => 'authGuard']);
$routes->get('add_new_address', 'Frontend\StoreAddressController::new_address', ['filter' => 'authGuard']);
$routes->post('store_address', 'Frontend\StoreAddressController::new_address_store', ['filter' => 'authGuard']);

// Client Feedbacks routes
$routes->get('client_feedbacks_listing', 'Backend\ClientFeedbackController::index', ['filter' => 'authGuard']);
$routes->get('add_new_client_feedback', 'Backend\ClientFeedbackController::create', ['filter' => 'authGuard']);
$routes->post('store_client_feedback', 'Backend\ClientFeedbackController::store', ['filter' => 'authGuard']);
$routes->get('edit_client_feedback/(:num)', 'Backend\ClientFeedbackController::edit/$1', ['filter' => 'authGuard']);
$routes->post('update_client_feedback/(:num)', 'Backend\ClientFeedbackController::update/$1', ['filter' => 'authGuard']);
$routes->get('delete_client_feedback/(:num)', 'Backend\ClientFeedbackController::delete/$1', ['filter' => 'authGuard']);




// Blog routes
$routes->get('blog', 'Backend\PostController::blog_view');

// Gallery routes
$routes->get('gallery', 'Backend\GalleryController::image_gallery_listing');


