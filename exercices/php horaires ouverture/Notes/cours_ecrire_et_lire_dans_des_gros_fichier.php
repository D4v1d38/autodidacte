<?php
/* 
=================================
Ecrire dans un fichier volumineux:
=================================

PHP alloue une certaie taille de mémoire, pour lire les gros fichiers il est possible que PHP retourne un erreur "allowed memory ..."
Une solution consiste à lire ligne par ligne les gros fichiers.
differentes fonctions existent :
fopen() ouvre le fichier sans le lire et sauvegarde une ressource, il place un curseur virtuelleen debut de fichier.
fread() lit le fichier , il faut lui preciser le nb d'octet à lire
fgets() permet la lecture ligne par ligne (on deplace le curseur a la fin de la ligne)
fwrite() permet d'ecrire dans le fichier ('r+' a preciser dans la fonction fopen()), les données ecrites ecraseront les donnees existantes si l'ecriture ne se fait pas a la fin du fichier.
*/ 

//Exemple 1 lecture par ligne
$monGrosFichier = __DIR__.DIRECTORY_SEPARATOR.'demo.csv';
$monGrosFichierALire = fopen($monGrosFichier,'r'); //on creer une ressource et on la stock dans une variable, r = lecture seule

echo fread($monGrosFichierALire, 6); // on lit les 6 premiers octets de la ressource

echo fgets($monGrosFichierALire);// lis la 1ere ligne et place le curseur a la fin de cette ligne
echo fgets($monGrosFichierALire);// lis la 2e ligne et place le curseur a la fin de cette ligne
echo fgets($monGrosFichierALire);// lis la 3e ligne et place le curseur a la fin de cette ligne

fclose($monGrosFichierALire);

//Exemple 1 lecture d'une ligne en particulier
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

//exemple 3 ecriture dans une ligne
// Ecriture dans une ligne du fichier
$maRessource = fopen($monGrosFichier,'r+'); // on ouvre une ressource r+ = lecture et ecriture
$k=0;

while($ligne = fgets($maRessource)){   //on assigne dans la condition de la boucle sinon fgets ne deplacera pas le curseur
    $k++;

    if($k == 1){
        fwrite($maRessource, 'ajout');
        break;
    } 
}
fclose($maRessource); // on ferme la ressource