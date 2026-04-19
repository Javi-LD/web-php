<?php
// Consulta a la base de datos para obtener las publicaciones más recientes
require __DIR__ . '/../framework/database.php';
require __DIR__ . '/../framework/validator.php';

$database = new Database();

// Consulta si la url existe
$routes = require __DIR__ . '/../routes/web.php';

// 
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$route = $routes[$requestUri] ?? null;

if ($route) {
    require __DIR__ . '/../' . $route;
} else {
    exit('404 Not Found');
}

?>