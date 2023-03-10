<?php
namespace app\routes;
use Exception;
use app\config\Config;
use app\helpers\Request;
use app\helpers\Uri;



class Router{
    

    
    public static function load(string $controller, string $method)
    {
      
        try {           
            $controllerNamespace = 'app\\controllers\\'.$controller;

            //Verificar se o conttroller existe
            if(!class_exists($controllerNamespace)){
                throw new Exception("O controller {$controller} não existe ");
            }         
            $controllerInstance = new $controllerNamespace;

            //Verificar se o método existe
            if(!method_exists($controllerInstance, $method)){
                throw new Exception("O método {$method} não existe no controller {$controller}!");
            }
            $controllerInstance->$method();
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public static function routes():array
    {   //Utilizando o self:: para chamar o método load
        return [
            'get' => [
                '/' =>  fn () => self::load('HomeController', 'index'),
                '/contact' => fn() => self::load('ContactController', 'index')
            ],

            'post' =>  fn () =>[
            ],

            'put' =>  fn () =>[
            ],

            'delete' =>  fn () =>[

            ],
        ] ;
    }


    public static function execute()
    {
        $routes = [];
        try {

            $routes = self::routes();
            $request = Request::get();
            $uri = Uri::get('path');

           
            //var_dump($routes[$uri]);
            if(!isset($routes[$request])){
                
                throw new Exception('A rota não existe!');
            }

            if(!array_key_exists($uri, $routes[$request])){

                if(!isset($routes[$request])){
                    throw new Exception('A  <b>rota</b> '.$routes[$request]);
                }elseif(!isset($uri)){
                    throw new Exception('A  <b>uri</b> '.$uri.' não existe!');
                }else{
                    throw new Exception('A  <b>rota</b> '.$routes[$request].' e <b>uri</b> '.$uri.' não existe!');
                }
                
            }

            var_dump($router = $routes[$request][$uri]);

            if (!is_callable($router)) {
                throw new Exception("A rota {$uri} não pode ser chamada!");
            }



        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

    }
}
