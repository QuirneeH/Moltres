<?php
require('vendor/autoload.php');

use CoffeeCode\Router\Router;
//URL Inicial "/"
$route = new Router(URL_SERVER);

//URL Raiz
$route->group(null)->namespace("App\Class\Controller");
$route->get("/", "UserController:home");
$route->get("/mais", "AuthController:home");

//URL de Erros
$route->group("ih");
$route->get("/{number}", function($info){
    echo $info['number'];
});

//Execulta as URLs e suas funções
$route->dispatch();

//Verifica erros de URL
if($route->error())
{
    //Redirecionamento de URL nos Erros
    $route->redirect("/ih/{$route->error()}");
}