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






    public function __construct($id=null,$date='',StatutEnum $statut= StatutEnum::Paye, $montant='', $montantRestant='')
    {
        $this->id = $id;
        $this-> statut = $statut;
        $this -> date = $date;
        $this -> montant = $montant;
        $this -> montantRestant = $montantRestant;
        $this -> commande = new Commande();
        $this->paiement=[];

    }



    public static  function toObject(array $data):static{
        $commande = new Commande($data ['facture_id']);

        return  new static(
           $data ['id'],
           $data['date'],
           $data['statut'],
           $commande,
        //    paiement: array_map(fn($paiement): Paiement => Paiement::toObject($paiement),$data['paiement'])
            

        );
        
    }


    public function toArray():array{
        return [   
        'id'=>$this->getId(),
        'date'=>$this->getDate(),
        'statut'=>$this->getStatut(),
        'commande'=>$this->getCommande(),
        'paiement' => array_map(fn($paiement) => $paiement->toArray(), $this->paiement),

        ];
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
}