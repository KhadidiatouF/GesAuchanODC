<?php
namespace App\entity;

use App\entity\Personne;
use App\entity\TypeEnum;

class Client extends Personne {
   private string $telephone;
   protected TypeEnum $type;
   private array $commandes;


   public function __construct( $id=0, $nom='' ,$telephone='',$login='',$mdp='')
   {
        parent::__construct($id, $nom ,$login,$mdp,TypeEnum::Client);  
        $this->telephone = $telephone;
       $this->commandes=[];
   }


    public static  function toObject(array $data):static{
        return  new self(
           $data ['id'],
           $data ['nom'],
           $data ['telephone'],
           $data ['login'],
           $data ['mdp'],
           $data ['type'],

        
        ); 
    }

    public  function toArray():array{
      $personnes=[
         "telephone"=> $this->telephone,
         "commande"=> $this->commandes,

      ];
      return $personnes;
    }




  
   public function getTelephone()
   {
      return $this->telephone;
   }

 
   public function setTelephone($telephone)
   {
      $this->telephone = $telephone;

      return $this;
   }

 
   public function getType()
   {
      return $this->type;
   }

  
   public function setType($type)
   {
      $this->type = $type;

      return $this;
   }

 

   /**
    * Get the value of commandes
    */ 
   public function getCommandes()
   {
      return $this->commandes;
   }

   /**
    * Set the value of commandes
    *
    * @return  self
    */ 
   public function addCommandes($commandes)
   {
      $this->commandes[] = $commandes;

      return $this;
   }


   //  public static  function toObject(array $data):static{
   //      $personne = parent::toObject($data);
   //      $personne->setTelephone($data['telephone']);
   //      return $personne;

   //  }

  
   //  public static  function toObject(array $data):static{

   //      return  new static(
   //         $data ['id'],
   //         $data['date'],
   //         $data['statut'],
   //      //    paiement: array_map(fn($paiement): Paiement => Paiement::toObject($paiement),$data['paiement'])
            

   //      );
        
   //  }

   //  public function toArray():array{
   //      $parentArray = parent::toArray();
   //      $parentArray['telephone'] = $this->getTelephone();
   //      $parentArray['commandes'] = array_map(fn($commande)=>$commande->toArray(), $this->getCommandes());
   //      return $parentArray;

   //  }
}