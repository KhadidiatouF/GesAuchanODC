<?php
namespace App\repository;

use App\config\Database;
use Commande;
use PDO;

class CommandeRepository {

    private ?PDO $pdo=null;

    public function __construct() {
        $this->pdo = Database::getConnexion();
    }

        public function findAll(): array {
            $sql = "SELECT 
                        c.id,
                        p.nom AS client_nom,
                        f.statut
                    FROM commande c
                    JOIN personne p ON c.id_personne = p.id
                    JOIN facture f ON c.id_facture = f.id";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }



//     public function findAll(): array {
//     $sql = "SELECT p.id, p.nom AS client_nom, c.statut
//             FROM commande c
//             JOIN personne p ON c.id_personne = p.id";
    
//     $stmt = $this->pdo->prepare($sql);
//     $stmt->execute(); // <-- à ne PAS commenter

//     $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

//     var_dump($result); // pour debug
//     die;

//     return $result;
// }




    
 
    
    public function create(Commande $commande) {
        $sql = "INSERT INTO commande (date) VALUES (:date)";
      
    }

    // public function findCommandeById($id) {
       
    // }

    
}