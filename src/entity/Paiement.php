<?php

use App\entity\Vendeur;

class Paiement{
    private int $id ;
    private string $date ;
    private string $montantVerser;
    private Facture $facture;
    private Vendeur $vendeur;






   public function __construct( $id=0,$date='',$montantVerser='')
   {
        $this->id = $id;
        $this->date=$date;
        $this->montantVerser=$montantVerser;
        $this->facture=new Facture();
        $this->vendeur=new Vendeur();

   }


    public static  function toObject(array $data):static{
        return  new self(
           $data ['id'],
           $data['date'],
           $data['montantVerser']

        );
        
    }

    public function toArray():array{
        $paiement =  [   
        'id'=>$this->id,
        'date'=>$this->date,
        'montantVerser'=>$this->montantVerser,
        'facture'=>$this->facture,
        'vendeur'=>$this->vendeur,
       
        ];
        return $paiement;
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

   
    public function getDate()
    {
        return $this->date;
    }

  
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

   
    public function getMontantVerser()
    {
        return $this->montantVerser;
    }

   
    public function setMontantVerser($montantVerser)
    {
        $this->montantVerser = $montantVerser;

        return $this;
    }

 
    public function getFacture()
    {
        return $this->facture;
    }

  
    public function setFacture($facture)
    {
        $this->facture = $facture;

        return $this;
    }

   
    public function getVendeur()
    {
        return $this->vendeur;
    }

 
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }
}