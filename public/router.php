<?php
// Router for PHP development server
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// If requesting root, set default URL parameter
if ($path === '/') {
    $_GET['url'] = 'home/index';
}

// If requesting a static file that exists, serve it
if ($path !== '/' && file_exists(__DIR__ . $path)) {
    return false; // Let PHP serve the file
}

// Otherwise, route through index.php
require_once __DIR__ . '/index.php';