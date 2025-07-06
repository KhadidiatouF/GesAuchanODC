<?php

use App\config\AbstactEntity;
use App\entity\StatutEnum;

class Facture extends AbstactEntity{

    private int $id;
    private string $date;
    private string $montant;
    private string $montantRestant;
    protected StatutEnum $statut;
    private Commande $commande;
    private array $paiement;






    public function __construct($id=0,$date='',StatutEnum $statut= StatutEnum::Paye, $montant='', $montantRestant='')
    {
        $this->id = $id;
        $this -> date = $date;
        $this-> statut = $statut;
        $this -> montant = $montant;
        $this -> montantRestant = $montantRestant;
        $this -> commande = new Commande();
        $this->paiement=[];

    }



  


    public static  function toObject(array $data):static{
        // $commande = new Commande($data ['facture_id']);
        return  new self(
           $data ['id'],
           $data['date'],
           $data['statut'],
           $data['montant'],
           $data['montantRestant'],
        //    $commande,
        );
        
    }


    public function toArray():array{
        $facture = [   
        "id"=> $this->id,
        "date"=> $this->date,
        "statut"=> $this->statut,
        "commande"=> $this->commande,
        'paiement' =>  $this->paiement
        ];
        return $facture;
    }
   

 
    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

 
    public function getStatut()
    {
        return $this->statut;
    }

 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

   
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    public function getCommande()
    {
        return $this->commande;
    }

 
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

 
    public function getPaiement()
    {
        return $this->paiement;
    }

    
    public function addPaiement($paiement)
    {
        return $this->paiement[]=$paiement;
       
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of montantRestant
     */ 
    public function getMontantRestant()
    {
        return $this->montantRestant;
    }

    /**
     * Set the value of montantRestant
     *
     * @return  self
     */ 
    public function setMontantRestant($montantRestant)
    {
        $this->montantRestant = $montantRestant;

        return $this;
    }
}