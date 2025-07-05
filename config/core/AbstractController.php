<?php

namespace App\config;

abstract class AbstractController{
    protected string $layout;
    protected $session;

    public function __construct()
    {
     $this-> layout ='base.layout.php';
    }

    abstract public function index() ;

    abstract public function destroy();

    abstract public function create();

    abstract public function edit();

    abstract public function show();

    abstract public function store();


    public function renderHtml($view){
        ob_start();
        require_once "../template/".$view;

        


       $containeForLayout = ob_get_clean();

       require_once "../template/layout/$this->layout";

      //require_once "../template/layout/base.layout.php";


     }

}