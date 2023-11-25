<?php
namespace Route;
//Usos

use AuthController;
use CoffeeCode\Router\Router;

require('vendor/autoload.php');

$route = new Router(URL_SERVER);
$route->namespace("App\Class\Controller");

$route->group(null);
$route->get("/", "AuthController:home");

$route->dispatch();