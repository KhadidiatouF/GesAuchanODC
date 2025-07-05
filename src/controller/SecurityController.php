<?php

namespace App\controller;

use App\config\AbstractController;
use SecurityService;

class SecurityController extends AbstractController{

    private $securityService;



    

    public function login(){

    }

    public function deconnexion(){
        header("Location: http://localhost:8000/");   

    }

    public function __construct()
    {
        $this->layout= 'security.layout.php';
    //    $this->securityService = new SecurityService();

        
    }


    public function store(){
        // $this->renderHtml('commandes/facture.html.php');
    }

    public function index(){

    }

    public function create(){
        require_once '../template/connexion/connexion.html.php';

    }

    public function show(){
    }

    public function edit(){
    }

    public function destroy(){}
 


}

