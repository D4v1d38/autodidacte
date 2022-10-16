<?php
namespace classe;


class Eleve extends Utilisateur
{
    use \traits\Presentation;
    use \traits\SecureData;
    private $niveau;
    
    public function __construct($prenom,$nom,$age,$niveau){
        parent::__construct($prenom,$nom,$age);
        $this->niveau = $niveau;
    }

    public function getNiveau():string{
        return '<p>'.$this->niveau.'</p>';
    }

    public function setNiveau(string $newNiveau):void{
        $this->niveau = $newNiveau;
    }
    
}