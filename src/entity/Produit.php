<?php


class Produit{
    private int $id;
    private int $prix;



   public function __construct( $id=0,$prix='')
   {
        $this->id = $id;
        $this->prix=$prix;

   }


     public static  function toObject(array $data):static{
        return  new self(
           $data ['id'],
           $data['prix']

        );
        
    }


    public function toArray():array{
        $produit= [   
        'id'=>$this->id,
        'prix'=>$this->prix
        ];
        return $produit;
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


    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

   
}