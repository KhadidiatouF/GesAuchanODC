<?php

use App\config\Routeur;

require_once '../vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv= Dotenv::createImmutable(__DIR__. '/../');
$dotenv->load();
$url=$_ENV['URL'];

$route = require_once '../route/route.web.php';


Routeur::resolve($route);



// $route =  $_REQUEST['action'] ?? 'liste';
//  $commandeController->forme();

// $action = $_REQUEST ['action'] ?? 'liste';




// switch ($action) {
//     case 'commande':
//      $commandeController->forme();
//         break;
//     case 'liste':
//       $commandeController->liste();
//         break;
    
    
//     default:
//         # code...
//         break;
// }





