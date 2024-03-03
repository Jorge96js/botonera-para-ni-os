<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;

$router = new Router();

$router->get('/',[LoginController::class, 'login']);
$router->post('/',[LoginController::class, 'login']);

//Rutas autenticadas
$router->get('/admin-panel',[LoginController::class, 'admin']);
$router->post('/admin-panel',[LoginController::class, 'admin']);

phpErrores();

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();