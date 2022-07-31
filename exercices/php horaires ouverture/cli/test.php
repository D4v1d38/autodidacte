<?php

// Ecrire dans un fichier 
// file_put_contents();
 //Écrit des données dans un fichier , Si le fichier filename n'existe pas, il sera créé. Sinon, le fichier existant sera écrasé, si l'option FILE_APPEND n'est pas définie.

file_put_contents(
    'monfichier.txt', 
    "salut",
);



$monAutreFichier = __DIR__.DIRECTORY_SEPARATOR.'monAutreFichier.txt';
var_dump(__DIR__);
var_dump(dirname($monAutreFichier));
var_dump(dirname(dirname($monAutreFichier)));
var_dump(dirname(dirname(dirname($monAutreFichier))));
var_dump(dirname($monAutreFichier,3));

file_put_contents(
    $monAutreFichier,  //chemin
    "Je suis un texte ", //données a écrire
);

file_put_contents(
    $monAutreFichier,  //chemin
    "test", //données a écrire, 
    FILE_APPEND // les données seront ecrit à la fin
);
// file_get_contents();//permet de lire  un fichier

$lecture = file_get_contents('monAutreFichier.txt');
var_dump($lecture);
