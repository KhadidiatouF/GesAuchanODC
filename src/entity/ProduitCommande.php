<?php
class ProduitCommande{
    private int $id;
    private int $qteComDe;
    private string $montant;
    private Commande $commande;
    private Produit $produit;



    public function __construct($id=null,$qteComDe='',$montant='')
    {
        $this->id = $id;
        $this->qteComDe = $qteComDe;
        $this->montant = $montant;
        $this->commande = new Commande;
        $this->produit = new Produit;

    }


    //   public static  function toObject(array $data):static{
    //     // $commande = new Commande( id: $data ['commande_id']);
    //     // $produit = new Produit( id : $data ['produit_id']);
    //     return  new static(

    //        $data ['id'],
    //        $data['qteComDe'],
    //        $data['montant'],
    //     //    $commande,
    //     //    $produit
    //     );
        
    // }
  
     public static  function toObject(array $data):static{
        return  new self(
           $data ['id'],
           $data['qteComDe'],
           $data['montant'],
     
        );
        
    }


    public function toArray():array{
        $produitCommande= [   
        'id'=>$this->id,
        'qteComDe'=>$this->qteComDe,
        'montant'=>$this->montant,
        'commande'=>$this->commande,
        'produit'=>$this->produit

        ];

        return $produitCommande;
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

 
    public function getQteComDe()
    {
        return $this->qteComDe;
    }

  
    public function setQteComDe($qteComDe)
    {
        $this->qteComDe = $qteComDe;

        return $this;
    }

 
    public function getMontant()
    {
        return $this->montant;
    }

  
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }


    

  

   
    public function getCommande()
    {
        return $this->commande;
    }

  
    public function addCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    public function getProduit()
    {
        return $this->produit;
    }


    public function addProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }
}