<?php
require __DIR__. "/utils/fonctions.php";
$config = require 'config.php';
$routes = $config['route'];

// dd($routes);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// if ($uri === '/') {
//     require 'controllers/index.php';
// } elseif ($uri === '/about') {
//     require 'controllers/about.php';
// } elseif ($uri === '/contact') {
//     require 'controllers/contact.php';
// }

// $routes = [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php'
// ];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    // echo "Alors perdu !";
    // die();
    // die("Alors perdu !");
    // exit;
    // http_response_code(404);
    // require "views/404.php";
    abort();
}