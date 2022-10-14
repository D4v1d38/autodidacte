<?php
require "./traits/Presentation.trait.php";
require "./classe/Utilisateur.class.php";
require "./classe/Eleve.class.php";

use \classe\Utilisateur;
use \classe\Eleve;

$user = new Utilisateur('sam','Lecasse',25);
echo $user->getPrenom();
echo $user->getnom();
echo $user->getAge();

$bart = new Eleve('bart','simpson',10,'cm2');
echo $bart->getPrenom();
echo $bart->getnom();
echo $bart->getAge();
echo $bart->getNiveau();

$bart->setNiveau('6e');

echo $bart->getNiveau();

$bart->setPrenom('Lisa');
echo $bart->getPrenom();
echo $bart->bonjour('bart');