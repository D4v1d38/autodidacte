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

$monGrosFichier = __DIR__.DIRECTORY_SEPARATOR.'demo.csv';
/*
$monGrosFichierALire = fopen($monGrosFichier,'r'); //on creer une ressource et on la stock dans une variable

echo fread($monGrosFichierALire, 6); // on lit les 6 premiers octets de la ressource

echo fgets($monGrosFichierALire);// lis la 1ere ligne et place le curseur a la fin de cette ligne
echo fgets($monGrosFichierALire);// lis la 2e ligne et place le curseur a la fin de cette ligne
echo fgets($monGrosFichierALire);// lis la 3e ligne et place le curseur a la fin de cette ligne

*/
// pour lire une ligne en paticulier => il faut faire une boucle
//exemple nous voulons lire la 4ieme ligne de notre fichier

$maRessource = fopen($monGrosFichier,'r'); // on ouvre une ressource
$k=0;

while($ligne = fgets($maRessource)){   //on assigne dans la condition de la boucle sinon fgets ne deplacera pas le curseur
    $k++;

    if($k == 4){
        var_dump($ligne);
        break;
    } 
}
fclose($maRessource); // on ferme la ressource


// Ecriture dans une ligne du fichier
$maRessource = fopen($monGrosFichier,'r+'); // on ouvre une ressource
$k=0;

while($ligne = fgets($maRessource)){   //on assigne dans la condition de la boucle sinon fgets ne deplacera pas le curseur
    $k++;

    if($k == 1){
        fwrite($maRessource, 'ajout');
        break;
    } 
}
fclose($maRessource); // on ferme la ressource
