<?php
require('vendor/autoload.php');

use CoffeeCode\Router\Router;

//URL Base
$route = new Router(URL_SERVER);

//Rota na Raiz
$route->group(null)->namespace("App\Web");
$route->get("/", "Web:welcome");

//Rota de Erros
$route->group("vish")->namespace("App\Web");
$route->get("/{number}", "Web:error");

//Execulta as Rotas e suas funções
$route->dispatch();

//Verifica erros de Rotas
if($route->error())
{
    //Redirecionamento de Rota nos Erros
    $route->redirect("/vish/{$route->error()}");
}