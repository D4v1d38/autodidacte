<?php
/* 
=======================
Ecrire dans un fichier :
========================
*/ 

file_put_contents();
//cette fonction permet d'écrire des données dans un fichier , Si le fichier filename n'existe pas, il sera créé. Sinon, le fichier existant sera écrasé, si l'option FILE_APPEND n'est pas définie.


/*
ci-dessous : le chemin est relatif à l'execution de php, 
le fichier sera créé au meme niveau que le script d'execution.
*/
 file_put_contents(
    'monfichier.txt',  //chemin
    "salut", //données a écrire
);

/*Pour indiquer un fichier absolue:
-> on utilise la super variable __DIR__ : on aura le chemin jusqu'au dossier parent,
-> DIRECTORY_SEPARATOR : permet d'integrer les separateurs du chemin en fonction du système d'exploitation
-> on fini ensuie par le nom du fichier. 
*/

var_dump(__DIR__);
//string(89) "D:\wamp\www\0-projets\notes-et-exercices-autodidacte\exercices\php horaires ouverture\cli"

$monAutreFichier = __DIR__.DIRECTORY_SEPARATOR.'monAutreFichier.txt';
file_put_contents(
    $monAutreFichier,  //chemin
    "Je suis un texte ", //données a écrire
);

file_put_contents(
    $monAutreFichier,  //chemin
    "test", //données a écrire, 
    FILE_APPEND // les données seront ecrit à la fin
);


/*La fonction dirname()
=> permet de remonter au fichier parent
*/

var_dump(__DIR__);
var_dump(dirname($monAutreFichier));
var_dump(dirname(dirname($monAutreFichier)));
var_dump(dirname(dirname(dirname($monAutreFichier))));
var_dump(dirname($monAutreFichier,3)); //depuis php 7 , il est possible de mettre un 2nd param pour indiquer le niveau a remonter

//string(89) "D:\wamp\www\0-projets\notes-et-exercices-autodidacte\exercices\php horaires ouverture\cli"
//string(89) "D:\wamp\www\0-projets\notes-et-exercices-autodidacte\exercices\php horaires ouverture\cli"
// string(85) "D:\wamp\www\0-projets\notes-et-exercices-autodidacte\exercices\php horaires ouverture"
// string(62) "D:\wamp\www\0-projets\notes-et-exercices-autodidacte\exercices"
// string(62) "D:\wamp\www\0-projets\notes-et-exercices-autodidacte\exercices"

/* 
=======================
Lire dans un fichier :
========================
*/ 
// file_get_contents();//permet de lire  un fichier
