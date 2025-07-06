<?php

use App\controller\ClientController;
use App\controller\CommandeController;
use App\controller\ConnexionController;
use App\controller\FactureController;
use App\controller\SecurityController;

    return $route = [

            "/"=>["controller"=>SecurityController::class, "action"=>"create"],
            "/deconnexion"=>["controller"=>SecurityController::class, "action"=>"deconnexion"],

            "/retourListe"=>["controller"=>CommandeController::class, "action"=>"index"],
            
            "/commandeClient"=>["controller"=>ClientController::class, "action"=>"index"],

            "/login"=>["controller"=>SecurityController::class, "action"=>"login"],



            "/addCommande"=>["controller"=>CommandeController::class, "action"=>"create"],
            "/factureCommande"=>["controller"=>FactureController::class, "action"=>"store"],


        
    ];

//    $routes = [
//      '/' => ['controller' => CommandeController::class, 'method' => 'index'],
//     '/lister' => ['controller' => CommandeController::class, 'method' => 'index'],
//     '/form' => ['controller' => CommandeController::class, 'method' => 'create'],
//     '/createCommande' => ['controller' => CommandeController::class, 'method' => 'store'],
//     '/facture' => ['controller' => FactureController::class, 'method' => 'store'],
