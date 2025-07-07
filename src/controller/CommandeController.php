<?php

namespace App\controller;

use App\config\AbstractController ;
use App\repository\CommandeRepository;

 class CommandeController extends AbstractController {

    private CommandeRepository $commandeRepository;



    public function form(){
        // $this->renderHtml('commandes/forme.html.php');

    }

    public function liste(){
  
    


    }


    // public function facture(){
    //     $this->renderHtml('commandes/facture.html.php');


    // }

    public function index() {
    $commandeRepository = new CommandeRepository();
    $commandes = $commandeRepository->findAll();

    $this->renderHtml('commandes/list.html.php', [
        'commandes' => $commandes
    ]);
}



    // public function index() {
    //     $this->renderHtml('commandes/list.html.php');

    //      $commandeRepository = new CommandeRepository();
    //     $commandes = $commandeRepository->findAll();

    //     // require_once '../template/commandes/list.html.php';

    // }

     public function destroy(){}

     public function create(){
        // require_once '../template/commandes/forme.html.php';

        $this->renderHtml('commandes/forme.html.php');


     }

     public function edit(){}

     public function show(){}

     public function store(){
        header("Location: http://localhost:8000/facture");
     }


}

//methodeCommande