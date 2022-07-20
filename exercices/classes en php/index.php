<?php

require 'classes/Personnes.php';
require 'classes/Eleve.php';

$prof = new Personnes('toto','truc',37);
$prof->presentation();

$eleve = new Eleve('bart','simpson',10,"cm2");
$eleve->presentationEleve();