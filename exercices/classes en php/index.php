<?php
require "./traits/Exemple.php";
Require './classes/Personnes.php';
Require './classes/Eleve.php';



$bart = new Eleve('Bart','Simpson',10,'cm2');

$bart->presentation();

$bart->setNom('Flander');

echo $bart->getNom();

$bart->presentation();

echo $bart->getClasse();

$bart->setClasse('6e');

echo $bart->getClasse();

echo $bart->direPrenom("bart");
