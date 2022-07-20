<?php


class Eleve extends Personnes{

    private string $niveau = " niveau non renseigné";

    public function __construct(string $nom,string $prenom,int $age,string $niveau){
        parent ::__construct($nom, $prenom, $age);

        $this->setNiveau($niveau);
    }

    public function presentationEleve():void{
        echo $this->nom.' '.$this->prenom.' age : '.$this->age.' en classe de : '.$this->niveau;
    }

    public function setNiveau($niveau){

    }

}
