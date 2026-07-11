<?php

require_once __DIR__ . '/config/database.php';

$controllerName = $_GET['controller'] ?? 'index';
$action = $_GET['action'] ?? 'index';
$method = $_SERVER['REQUEST_METHOD'];
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

$controllerFile = __DIR__ . '/controllers/' . $controllerName . 'Controller.php';

if (!file_exists($controllerFile)) {
    http_response_code(404);
    die('<h2>404 — Controlador no encontrado</h2>');
}

require_once $controllerFile;
$controllerClass = ucfirst($controllerName) . 'Controller';
$controller = new $controllerClass();

if (!method_exists($controller, $action)) {
    http_response_code(404);
    die('<h2>404 — Acción no encontrada</h2>');
}

if ($id !== null && in_array($action, ['show', 'edit', 'update', 'delete'], true)) {
    $controller->$action($id);
} else {
    $controller->$action();
}
