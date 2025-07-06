<?php
namespace App\service;
use App\repository\PersonneRepository;
 
class SecurityService {
    private PersonneRepository $personneRepository;

    public function __construct()

    {
        $this->personneRepository=  new PersonneRepository;
        
    }




    public function seConnecter($login,$password)
    {
        $user = $this->personneRepository->selectByLoginPassword($login, $password);
        return $user;

    }


}