<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/index.php',
  '/contact' => 'controllers/contact.php',
  '/about' => 'controllers/about.php'
];

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require_once $routes[$uri];
  } else {
     abort(404);
  }
}

function abort($status_code)
{
  http_response_code($status_code);
  require_once "controllers/{$status_code}.php";
  die();
}

routeToController($uri, $routes);

