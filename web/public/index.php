<?php

use Core\Router;

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'Core/utilities/functions.php';
require_once BASE_PATH . 'Core/utilities/dd.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require_once base_path("{$class}.php");
});

$router = new Router();

$routes = require_once base_path('routers.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);