<?php

namespace app\routes;

use app\helpers\Request;
use app\helpers\Uri;

class Router
{
    
    const CONTROLLER_NAMESPACE = 'app\\controllers';
        
    public static function load(string $controller, string $method){

        try {
            //verificar se o controller exister
            $controllerNamespace = self::CONTROLLER_NAMESPACE.'\\'.$controller; 
            if(!class_exists($controllerNamespace)){
                throw new \Exception("O Controller {$controller} não exsite");                
            }

            $controllerInstance = new $controllerNamespace;

            if(!method_exists($controllerInstance, $method)){
                throw new \Exception("O Método  {$method} não exsite no Controller {$controller}");                
            }

            $controllerInstance->$method((object)$_REQUEST);

        } catch (\Throwable $e) {
            echo $e->getMessage();
        }

    }
    
    public static function routers():array{
        return [
            'get' => [
                '/'        => fn() => self::load('EntradaController', 'index'),
                '/contact' => fn() => self::load('ContactController', 'index'),              
                '/calculo' => fn() => self::load('CalculoController', 'index'),              
                '/product' => fn() => self::load('ProductController', 'index')              
                          
                
            ],

            'post' =>[
                '/contact' => fn() => self::load('ContactController', 'store'),
                '/calculo' => fn() => self::load('CalculoController', 'store'),
                '/entrada' => fn() => self::load('ContactController', 'store')
            ],

            'put' => [
                '/product' => fn() => self::load('ProductController', 'update'),
            ],

            'delete' => [

            ]
        ];
    }

    public static function execute(){
        try {
            $routes  = self::routers();
            $request = Request::get();
            $uri     = Uri::get('path');

            if(!isset($routes[$request])){
                throw new \Exception("A rota não existe");                
            }
            
            if(!array_key_exists($uri, $routes[$request])){
                throw new \Exception("A rota não existe");                
            }

            $router = $routes[$request][$uri];            

            if(!is_callable($router)){
                throw new \Exception("Route {$uri} is not calllable");
                
            }

            $router();
        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }

}