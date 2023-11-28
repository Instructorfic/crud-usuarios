<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//RUTAS CRUD USUARIOS
$routes->get('users','UserController::index'); //Obtener los usuarios registrados
$routes->get('users/new','UserController::new'); // Cargar la vista para crear un nuevo usuarios
$routes->post('users','UserController::create'); //Crear un nuevo usuario
$routes->get('users/(:num)','UserController::show/$1'); //Mostrar los datos del usuario
$routes->get('users/edit/(:num)','UserController::edit/$1'); //Cargar la vista para modificar los datos del usuario
$routes->put('users/(:num)','UserController::update/$1');//Modificar los datos del usuario
$routes->delete('users/(:num)','UserController::delete/$1');//Eliminar al usuario
$routes->get('Saludo_Orlando','OrlandoController::index');
$routes->get('Saludo_Yaril', 'YarilController::index');