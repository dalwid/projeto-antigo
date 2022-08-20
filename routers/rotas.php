<?php

function load(string $controller, string $action){
    try {
        $controllerNameSpace = "app\\controllers\\{$controller}";

    if(!class_exists($controllerNameSpace)){
        throw new Exception("Que vc ta fazendo?");
       die("Morreu") ;       
    }

    $controllerInstance = new $controllerNameSpace();

    if(!method_exists($controllerInstance, $action)){
        throw new Exception("Isso não existe");        
    }

    $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
        $e->getMessage();
    }
    
}

$router = [

    "GET" => [
        '/'        => fn() => load('HomeController', 'index'),
        '/entrada' => fn() => load('EntradaController', 'index'),
        '/calculo' => fn() => load('CalculoController', 'index'),
        "/sobre"  => fn() => load('SobreController', 'index'),
        "/resultado"  => fn() => load('ResultadoController', 'index')
        
    ],

    "POST" =>[
        '/calculo' => fn() => load('CalculoController', 'show'),
        
    ]
];