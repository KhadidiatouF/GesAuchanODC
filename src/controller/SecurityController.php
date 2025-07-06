<?php

namespace App\controller;

use App\config\AbstractController;
use App\config\Validator;
use App\service\SecurityService;

class SecurityController extends AbstractController{

    private SecurityService $securityService;


    public function login(){


        $email= $_POST['email'];
        $password= $_POST['password'];

        $user = $this->securityService->seConnecter($email,$password);


        Validator::isEmail($email, 'email', 'Email invalide');
        Validator::isEmpty($password, 'password', 'Mot de passe requis');

            // var_dump($user);die;

        if ($user && $email == $user->getLogin() && $password == $user-> getMdp()) {

                // var_dump($user->getType()->value);die;

            if (trim($user->getType()->value) =='Client') {
                header("Location: http://localhost:8000/commandeClient"); 
                exit;  
                
            }
            // var_dump($user->getType()->value);die;
            if (trim($user->getType()->value) =='Vendeur') {
                header("Location: http://localhost:8000/retourListe");  
                exit;  
                
            }

        } else {
        
             header("Location: http://localhost:8000/");   
                exit;  


        }
        // if ($email == $user->getLogin() && $password == $user-> getMdp()) {
        //      header("Location: http://localhost:8000/retourListe");   
        // }else {
        //      header("Location: http://localhost:8000/");   

        // 


    }

    public function deconnexion(){
        header("Location: http://localhost:8000/");   

    }

    public function __construct()
    {
        $this->layout= 'security.layout.php';
        $this->securityService = new SecurityService();

        
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

