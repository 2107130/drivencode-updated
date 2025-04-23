<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/services', 'Services::index');
$routes->get('/make-appointment', 'Appointment::index');
$routes->get('get-time-slots', 'Appointment::getTimeSlots');
$routes->post('appointment/submit-booking', 'Appointment::submitBooking');
$routes->get('/success-page', 'Appointment::successPage');
$routes->post('contact', 'Contact::submit');

$routes->get('load-more-coded-cars', 'Home::loadMoreCodedCars');


$routes->group('admin', function ($routes) {
    $routes->get('login', 'LoginController::index');
    $routes->post('login/process', 'LoginController::processLogin');

    $routes->group('', ['filter' => 'admin-auth'], function ($routes) {
        $routes->get('/', 'AdminController::index');

        // admin service routes
        $routes->get('services', 'AdminController::services');
        $routes->get('services/add-new-service', 'AdminController::add_new_service');
        $routes->post('services/store', 'AdminController::service_store');
        $routes->get('services/edit/(:num)', 'AdminController::editService/$1');
        $routes->put('services/update/(:num)', 'AdminController::updateService/$1');
        $routes->delete('services/delete/(:num)', 'AdminController::deleteService/$1');

        ///-- appointment bookings routes
        $routes->get('bookings', 'AdminController::bookings');
        $routes->patch('bookings/update-status/(:num)', 'AdminController::updateServiceBookingtatus/$1');
        $routes->delete('bookings/delete/(:num)', 'AdminController::deleteServiceBooking/$1');

        $routes->get('customers-quires', 'AdminController::contact_quires');
        $routes->delete('inquiries/delete/(:num)', 'AdminController::deleteInquiry/$1');


        $routes->get('logout', 'AdminController::logout', ['as' => 'admin.logout']);
    });
});
