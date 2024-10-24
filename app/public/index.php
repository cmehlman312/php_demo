<?php

const BASE_PATH = __DIR__.'/../';
require BASE_PATH . 'Core/functions.php';
require BASE_PATH . 'Core/Router.php';

$router = new \Core\Router();
require BASE_PATH . 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
