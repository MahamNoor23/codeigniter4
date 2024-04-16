<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'HomeController::homepage');
$routes->get('/about', 'HomeController::about');
$routes->get('/contact', 'HomeController::contact');
$routes->get('/features', 'HomeController::features');
$routes->get('/team', 'HomeController::team');
$routes->get('/testimonials', 'HomeController::testimonials');
$routes->get('/faq', 'HomeController::faq');