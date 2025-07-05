<?php


namespace App\entity;

use App\config\AbstactEntity ;

abstract class  Personne  extends AbstactEntity{
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected TypeEnum $type;



    public function __construct($id = null, $nom = '',$prenom ='',TypeEnum $type) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->type = $type;


    }

   


    // public static  function toObject(array $data):static{
    //     return  new static(
    //        $data ['id'],
    //        $data['nom'],
    //        $data['prenom'],
    //        $data['type']

    //     );
        
    // }


    public function toArray():array{
        return [   
        'id'=>$this->getId(),
        'nom'=>$this->getNom(),
        'prenom'=>$this->getPrenom(),
        'type'=>$this->getType()
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

    public function getNom()
    {
        return $this->nom;
    }

  
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

 
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

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
}

   
 