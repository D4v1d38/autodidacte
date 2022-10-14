<?php

abstract class Personnes{
    protected $nom;
    protected $prenom;
    protected $age;


    abstract public function presentation();
    
    public function setNom($newName){
        $this->nom = $newName;
    }

    public function getNom(){
        return $this->nom;
    }
}
