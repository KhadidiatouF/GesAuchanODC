<?php
namespace App\config;
use  App\config\Error;

  

class Routeur{
    public static function resolve($route){
          $uri = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);
          

        if (array_key_exists($uri, $route)) {

         $nomController =$route[$uri]['controller']; 
         $nomAction =$route[$uri]['action']; 

         $controller = new $nomController();
         $controller->$nomAction();


        }else {
            
          $erreurController = new Error(); 
          $erreurController-> erreur();
            
        }

    }
}