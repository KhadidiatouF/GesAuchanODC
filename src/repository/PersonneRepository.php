<?php

use App\config\AbstractRepository;

class PersonneRepository extends AbstractRepository {

    private $pdo;
    public function selectByLoginPassword($login,$password){
            $sql = "SELECT * FROM personne WHERE login = :login AND password = :password";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':login' => $login,
                ':password' => $password
            ]);
            
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            
           if (isset($row)) {
                $personne = Vendeur::toObject($row); 
           }

            
            return $personne;
        
    }

    public function selectAll(){}
     public function insert(){}
     public function update(){}
     public function delete(){}
     public function selectById(){}
     public function selectBy($array,$filtre){}

}