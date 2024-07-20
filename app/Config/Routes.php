<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rutas principales
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

// Rutas de registro de usuarios
$routes->get('registro', 'usuario_Controller::create');
$routes->post('enviar-form', 'usuario_Controller::formValidation');


// Rutas de login
$routes->get('login', 'login_controller::index');
$routes->post('enviarlogin', 'login_controller::auth');
$routes->get('panel', 'panel_Controller::index', ['filter' => 'auth']);
$routes->get('logout', 'login_controller::logout');
