<?php
require_once('vendor/autoload.php');

use CoffeeCode\Router\Router;

//URL Base
$router = new Router(URL_SERVER);

//Rota na Raiz
$router->group(null)->namespace("App\Web");
$router->get("/", "Welcome:welcome");

//Rota de Erros
$router->group("vish")->namespace("App\Web");
$router->get("/{code}", "Error:error");

//Execulta as Rotas e suas funções
$router->dispatch();

//Verifica erros de Rotas
if($router->error())
{
    //Redirecionamento de Rota nos Erros
    $router->redirect("/vish/{$router->error()}");
}