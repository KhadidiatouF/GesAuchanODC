<?php

namespace App\controller;

use App\config\AbstractController ;

 class ClientController extends AbstractController {


    public function form(){

    }

    public function liste(){


    }

    public function __construct()
    {
        $this->layout= 'client.layout.php';

    }

   


    public function index() {
        $this->renderHtml('commandes/client.html.php');

    }

    public function destroy(){}

    public function create(){



     }

     public function edit(){}

     public function show(){}

     public function store(){
     }


}
