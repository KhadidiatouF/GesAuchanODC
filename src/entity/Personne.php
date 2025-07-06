<?php


namespace App\entity;

use App\config\AbstactEntity ;

abstract class  Personne  extends AbstactEntity{
    protected int $id;
    protected string $nom;
    protected string $login;
    protected string $mdp;
    protected TypeEnum $type;



    public function __construct($id = 0, $nom = '',$login='',$mdp='', TypeEnum $type) {
        $this->id = $id;
        $this->nom = $nom;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->type = $type;


    }

   


    public static  function toObject(array $data):static{
        return  new self(
           $data ['id'],
           $data['nom'],
           $data['login'],
           $data['mdp'],
           $data['type']
        );
        
    }


    public function toArray():array{
        return [   
        'id'=>$this->getId(),
        'nom'=>$this->getNom(),
        'login'=>$this->getLogin(),
        'mdp'=>$this->getMdp(),
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

 
 
   
    public function getType()
    {
        return $this->type->value;
    }

  
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
}

   
 