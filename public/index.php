<?php

require_once '../core/autoloader.php';

// Simple routing
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home/index';
$url = explode('/', $url);

$controllerName = ucfirst($url[0]) . 'Controller';
$methodName = $url[1] ?? 'index';
$controllerFile = '../controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        echo "Method $methodName not found!";
    }
} else {
    echo "Controller $controllerName not found!";
}