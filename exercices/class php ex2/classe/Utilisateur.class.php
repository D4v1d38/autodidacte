<?php

namespace classe;

class Utilisateur
{

    private $prenom;
    private $nom;
    private $age;
    protected $nation;

    public function __construct($prenom,$nom,$age){
        $this->prenom   = $prenom;
        $this->nom      = $nom;
        $this->age      = $age;
    }

    public function getPrenom():string{
        return $this->prenom;
    }
    
    public function getNom():string{
        return $this->nom;
    }

    public function getAge():int{
        return $this->age;
    }

    public function setPrenom($newPrenom){
        $this->prenom = $newPrenom;
    }

}