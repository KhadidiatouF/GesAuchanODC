<?php

namespace App\controller;

use App\config\AbstractController ;

 class CommandeController extends AbstractController {


    public function form(){
        // $this->renderHtml('commandes/forme.html.php');

    }

    public function liste(){
        // $this->renderHtml('commandes/list.html.php');


    }


    // public function facture(){
    //     $this->renderHtml('commandes/facture.html.php');


    // }


    public function index() {
        $this->renderHtml('commandes/list.html.php');

        // require_once '../template/commandes/list.html.php';

    }

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