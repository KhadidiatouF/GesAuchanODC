<?php
namespace App\entity;
use App\entity\Personne;
use App\entity\TypeEnum;

class Vendeur extends Personne{

   protected TypeEnum $type;
   private array $commande;
   private array $paiement;



   public function __construct( $id=0, $nom='' ,$login='',$mdp='')
   {
        parent::__construct($id, $nom ,$login,$mdp,TypeEnum::Vendeur);  
        $this->commande=[];
        $this->paiement=[];


   }


    public static  function toObject(array $data):static{
        return  new self(
           $data ['id'],
           $data ['nom'],
           $data['login'],
           $data['mdp'],
           $data ['type'],

        ); 
    }

    public  function toArray():array{
      $personnes=[
         "login"=> $this->login,
         "mdp"=> $this->mdp,
         "commande"=> $this->commande,
         "paiement"=> $this->paiement,

      ];
      return $personnes;
    }

      // public function toArray():array{
      //   $parentArray = parent::toArray();
      //   $parentArray['matricule'] = $this->getMatricule();
      //   $parentArray['login'] = $this->getLogin();
      //   $parentArray['mdp'] = $this->getMdp();

      //   $parentArray['commande'] = array_map(fn($commande)=>$commande->toArray(), $this->getCommande());
      //   $parentArray['paiement'] = array_map(fn($paiement)=>$paiement->toArray(), $this->getPaiement());

      //   return $parentArray;

      // }



 
   public function getLogin()
   {
      return $this->login;
   }

 
   public function setLogin($login)
   {
      $this->login = $login;

      return $this;
   }

  
   public function getMdp()
   {
      return $this->mdp;
   }

 
   public function setMdp($mdp)
   {
      $this->mdp = $mdp;

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

   
   public function getCommande()
   {
      return $this->commande;
   }

  
   public function addCommande($commande)
   {
      return $this->commande[]=$commande;

   }

 
   public function getPaiement()
   {
      return $this->paiement;
   }

   
   public function addPaiement($paiement)
   {
      return $this->paiement[]=$paiement;

   }
}
