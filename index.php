<?php
require_once 'config.php';

// Obtenemos la ruta limpia desde la URL
$url = isset($_GET['url']) ? $_GET['url'] : 'login';
$route = explode('/', $url);

// Lógica de ruteo según Captura de pantalla_20260531_185059.png
switch ($route[0]) {
    case 'login':
        include 'views/login.php';
        break;
    case 'register':
        include 'views/register.php';
        break;
    case 'dashboard':
        // Aquí verificarías si el usuario es Admin, Estudiante o Profesor
        include 'views/dashboard.php';
        break;
    case 'admin':
        // Sub-rutas para el admin
        $sub = isset($route[1]) ? $route[1] : 'prestamos';
        include "views/admin/$sub.php";
        break;
    case 'solicitar':
        include 'views/solicitar.php';
        break;
    case 'mis-prestamos':
        include 'views/mis_prestamos.php';
        break;
    default:
        echo "404 - Página no encontrada";
        break;
}
?>
