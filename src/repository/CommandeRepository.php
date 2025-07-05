<?php

class CommandeRepository {

    private $db;
    
    public function __construct() 
    {
        // $database = new Database();
        // $this->db = $database->getConnection();
    }
    
    public function create(Commande $commande) {
        $sql = "INSERT INTO commande (date) VALUES (:date)";
      
    }
    
    public function findAll() {
        $sql = "SELECT * FROM categorie ORDER BY libelle";
       
    }
    
    public function findCommandeById($id) {
       
    }

    
}