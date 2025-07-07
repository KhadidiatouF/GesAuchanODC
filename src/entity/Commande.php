<?php

use App\config\AbstactEntity;
use App\entity\Client;
use App\entity\StatutEnum;
use App\entity\Vendeur;

class Commande  extends AbstactEntity{
    private int $id ;
    private string $date ;
    private Client $client;
    private Vendeur $vendeur;
    private ?Facture $facture=null;
    private array $produitCommandes;




   public function __construct( $id=0,$date='')
   {
        $this->id = $id;
        $this->date=$date;
        $this->client =new Client();
        $this->vendeur=new Vendeur();
        $this->facture=new Facture(null, '', StatutEnum::Paye, '','');
        $this->produitCommandes=[];
        
   }




    public static  function toObject(array $data):static{
        $client = new Client( $data ['client_id']);
        $vendeur = new Vendeur( $data ['vendeur_id']);
        $facture = new Facture($data ['facture_id']);
        
        return  new self(
           $data ['id'],
           $data['date'],
           $client,
           $vendeur,
           $facture,
        );
        
    }


    public function toArray():array{
        return [   
        'id'=>$this->getId(),
        'date'=>$this->getDate(),
        'client' => $this->client->toArray(),
        'vendeur' => $this->vendeur->toArray(),
        'facture' => $this->facture->toArray(),
        'produitCommandes' => array_map(fn($produit) => $produit->toArray(), $this->produitCommandes),

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

 
    public function getDate()
    {
        return $this->date;
    }

 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

 
    public function getClient()
    {
        return $this->client;
    }

   
    public function setClient($client)
    {
        $this->client = $client;

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

  
   

   
    public function getFacture()
    {
        return $this->facture;
    }

    
    public function setFacture($facture)
    {
        $this->facture = $facture;

        return $this;
    }

 
    public function getProduitCommande()
    {
        return $this->produitCommandes;
    }

    public function addProduitCommande($produitCommandes)
    {
        $this->produitCommandes[] = $produitCommandes;

        return $this;
    }
}