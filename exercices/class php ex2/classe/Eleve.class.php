<?php
namespace classe;


class Eleve extends Utilisateur
{
    use \traits\Presentation;
    private $niveau;
    
    public function __construct($prenom,$nom,$age,$niveau){
        parent::__construct($prenom,$nom,$age);
        $this->niveau = $niveau;
    }

    public function getNiveau():string{
        return '<p>'.$this->niveau.'</p>';
    }

    public function setNiveau($newNiveau){
        $this->niveau = $newNiveau;
    }
    
}