<?php

use App\config\Routeur;

require_once '../vendor/autoload.php';


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





// use App\entity\StatutEnum;
// use App\entity\TypeEnum;




// use App\entity\Manager;
// use App\entity\Service;


// $vendeur1 = new Vendeur("diop","ismaila","admin","admin123", type: TypeEnum::Client );

// $client1 = new Client("fall","khadija","783344302","200000", specialite: Specialite::FullStack , type: Type::Developpeur);

// $commande1 = new Commande("gueye","rama","783344632","200000","10000", type: Type::Manager );

// $facture = new Facture("");

