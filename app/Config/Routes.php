<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Home'); // Set the default homepage
$routes->get('/', 'Home::index');      // Default route for home page
$routes->get('services', 'Services::index'); // Route for services page
$routes->get('contact', 'Contact::index');   // Route for contact page
