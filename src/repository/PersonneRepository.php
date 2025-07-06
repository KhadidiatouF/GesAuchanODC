<?php
namespace App\repository;
use App\config\AbstractRepository;
use App\config\Database;
use PDO;
use App\entity\Vendeur;
use App\entity\Client;


class PersonneRepository extends AbstractRepository {

    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = Database::getConnexion();
    }
    public function selectByLoginPassword($login,$password){
            $sql = "SELECT * FROM personne WHERE login = :login AND mdp = :mdp ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':login' => $login,
                ':mdp' => $password
            ]);
            
            $user = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            
           if (isset($user) && $user[0]['type'] === 'vendeur' ) {

               return  Vendeur::toObject($user[0]); 
           }
           elseif (isset($user) && $user[0]['type'] === 'client') {
            // var_dump($user); die;

             return  Client::toObject($user[0]); 

          }
        
    }

    public function selectAll(){}
     public function insert(){}
     public function update(){}
     public function delete(){}
     public function selectById(){}
     public function selectBy($array,$filtre){}

}