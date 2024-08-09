<?php
require '../helpers.php';
require basePath('Router.php');
require basePath('Database.php');
// Inicializando el Router
$router = new Router();
// Get routes
$routes = require basePath('routes.php');
// Get uri and http method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
// route the request 
$router->route($uri, $method);
