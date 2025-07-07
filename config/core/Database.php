<?php
namespace App\config;
use PDO;
use PDOException;

class Database {

    private static  ?PDO $pdo=null;

    public static function  getConnexion(): PDO{
      if (self::$pdo === null) {



            $host = $_ENV['DB_HOST'];
            $dbname = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $pass = $_ENV['DB_PASS']; 
            $port=$_ENV['DB_PORT'];
            

            // $host = 'localhost';
            // $dbname = 'GesAuchan';
            // $user = 'khadija';
            // $pass = 'khadijaf'; 
             $dsn = "mysql:host=$host;
             port=3306;
            
            dbname=$dbname";
            try {
                self::$pdo = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    
                ]);
     

            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
    

}