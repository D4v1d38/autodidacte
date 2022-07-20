<?php

class Personnes{
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom,$prenom,$age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function presentation(){
        echo $this->nom.' '.$this->prenom.' age : '.$this->age;
        }

    
}