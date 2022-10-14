<?php

class Eleve extends Personnes {
    use traits\Exemple;
    private $classe;

    public function __construct($p,$n,$a,$c){
        $this->nom = $n;
        $this->prenom = $p;
        $this->age = $a;
        $this->classe = $c;
    }
    
    public function presentation(){
        echo "<p>bonjour je suis ".$this->prenom.' '.$this->nom.' est j\'ai '.$this->age.' ans en classe de :'.$this->classe .'</p>'; 
    }

    public function setClasse($newClasse){
        
        $this->classe = $newClasse;
    }

    public function getClasse(){
        return $this->classe;
    }


}
