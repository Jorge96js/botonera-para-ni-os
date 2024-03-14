<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;

$router = new Router();

$router->get('/',[LoginController::class, 'index']);
$router->post('/',[LoginController::class, 'index']);

$router->get('/login',[LoginController::class, 'login']);
$router->post('/login',[LoginController::class, 'login']);

$router->get('/seguimiento',[LoginController::class, 'seguimiento']);
$router->get('/barrio',[LoginController::class, 'barrios']);
$router->get('/botonera',[LoginController::class, 'botonera']);



//Rutas autenticadas
$router->get('/admin-panel',[LoginController::class, 'admin']);
$router->post('/admin-panel',[LoginController::class, 'admin']);

phpErrores();

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();