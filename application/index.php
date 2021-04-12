<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start();
session_start();

require __DIR__.'/vendor/autoload.php';

use CoffeeCode\Router\Router;
$router = new Router(site());

$router->namespace(("Source\Controllers"));

$router->group(null);
$router->get("/", "Web:login", "web.login");
$router->get("/register", "Web:register", "web.register");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha", "Web:password", "web.password");


$router->dispatch();


if($router->error()){
    $router->redirect("web.error", ["errcode" => $router->error()]);
}



ob_end_flush();
