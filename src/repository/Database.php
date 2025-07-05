<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'GesAuchan';
    private $username = 'khadija';
    private $password = 'khadijaf';
    private $pdo;
    
    public function getConnection() {
        if ($this->pdo == null) {
            try {
                $this->pdo = new PDO(
                    "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                    $this->username,
                    $this->password
                );
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Erreur de connexion : " . $e->getMessage();
            }
        }
        return $this->pdo;
    }
}