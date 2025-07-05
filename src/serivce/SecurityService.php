<?php

class SecurityService {
    private $personneRepository;
    private $personneService;
    private $personneConnecte;



    public function seConnecter($login,$password){

        if (empty($login) || empty($motDePasse)) {
            throw new Exception("Login et mot de passe requis");
        }
        
        $personne = $this->personneRepository->trouverParLogin($login);
        
        if (!$personne) {
            throw new Exception("personne introuvable");
        }
        
        if (!$personne->isActif()) {
            throw new Exception("Compte désactivé");
        }
        
        if (!$personne->verifierMotDePasse($motDePasse)) {
            throw new Exception("Mot de passe incorrect");
        }
        
        $this->personneConnecte = $personne;
        $this->personneRepository->mettreAJourDerniereConnexion($personne->getId());
        
        return true;
    }

    public function __construct()
    {
        
    }
}