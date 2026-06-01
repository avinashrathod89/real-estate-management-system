<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('search', 'Home::search');

// For detail page - both versions work
$routes->get('home/detail/(:num)', 'Home::detail/$1');
$routes->post('home/detail/(:num)', 'Home::detail/$1');

$routes->get('detail', 'Home::detailList'); // ✅ NEW: property list ke liye
$routes->get('detail/(:num)', 'Home::detail/$1');
$routes->post('detail/(:num)', 'Home::detail/$1');

// Allow /detail without ID
$routes->get('detail', 'Home::detail');
$routes->post('detail', 'Home::detail');


$routes->get('about', 'Home::about');

$routes->get('welcome', 'Home::welcome');
$routes->post('welcome', 'Home::welcome');

$routes->get('signout', 'Home::signout');

$routes->get('contact', 'Home::contact');
$routes->post('contact', 'Home::contact');

$routes->get('login', 'Home::login');
$routes->post('login', 'Home::login');

$routes->get('register', 'Home::register');
$routes->post('register', 'Home::register');

$routes->get('blog', 'Home::blog');

$routes->get('create', 'Crud::create'); //to display html page from view
$routes->post('create', 'Crud::create'); //to submit data to server side from html page

$routes->get('read', 'Crud::read');

$routes->get('delete/(:num)', 'Crud::delete/$1');

$routes->get('update/(:num)', 'Crud::update/$1');
$routes->post('update/(:num)', 'Crud::update/$1');

$routes->get('login', 'Admin::login');
$routes->post('login', 'Admin::login');

$routes->get('welcome', 'Admin::welcome');

$routes->get('logout', 'Admin::logout');


$routes->get('admin', 'Admin::login');
$routes->post('admin', 'Admin::login');

$routes->get('dashboard', 'Admin::dashboard');


//broker module
$routes->get('brokers', 'Brokers::manage');

$routes->get('add-broker', 'Brokers::add');
$routes->post('add-broker', 'Brokers::add');

$routes->get('update-broker/(:num)', 'Brokers::update/$1');
$routes->post('update-broker/(:num)', 'Brokers::update/$1');

$routes->get('delete-broker/(:num)', 'Brokers::delete/$1');


//Properties module
$routes->get('properties', 'Properties::manage');
$routes->get('add-property', 'Properties::add');
$routes->post('add-property', 'Properties::add');
$routes->get('update-property/(:num)', 'Properties::update/$1');
$routes->post('update-property/(:num)', 'Properties::update/$1');
$routes->get('delete-property/(:num)', 'Properties::delete/$1');


//Enquiries module
$routes->get('enquiries', 'Enquiries::index');


//Contacts module
$routes->get('contacts', 'Contacts::manage');

//Staff module
$routes->group('staff', function ($routes) {
    $routes->get('/', 'Staff::index');                      // List all staff
    $routes->get('add', 'Staff::add');                      // Show add form
    $routes->post('add', 'Staff::insert');                  // Handle form submit
    $routes->get('edit/(:num)', 'Staff::edit/$1');          // Show edit form
    $routes->post('edit/(:num)', 'Staff::update/$1');       // Handle edit submit
    $routes->get('delete/(:num)', 'Staff::delete/$1');      // Delete staff
});


//Appointment module
$routes->group('appointments', function ($routes) {
    $routes->get('/', 'Appointments::index');               // Manage
    $routes->get('add', 'Appointments::add');              // Show Add Form
    $routes->post('add', 'Appointments::add');             // Handle Submit
    $routes->get('edit/(:num)', 'Appointments::edit/$1');  // Edit form
    $routes->post('edit/(:num)', 'Appointments::edit/$1'); // Edit submit
    $routes->get('delete/(:num)', 'Appointments::delete/$1'); // Delete
});