<?php

$crenaux=[];
$userExit = null;
$heureDebut=null;
$heurfin=null;

while(true){
    
    $heureDebut = readline('entrez heure ouverture : ');
    $heurfin = readline('entrez heure fermeture : ');

    if($heureDebut >= $heurfin){
        echo "le crenaau est invalide";
        $userExit = readline('abandon? o/n');
        
        if($userExit === 'o'){
            break;
        }
    }else{
        $crenaux[] = [$heureDebut, $heurfin];
        $userExit = readline('entrez un autre creneau ? o/n');
        if($userExit == 'n'){
            break;
        }
    }
}

echo 'ouvert de ';
foreach($crenaux as $k => $creneau){
   if($k > 0){
    echo " et de ";
   }
    echo $creneau[0].' à '.$creneau[1];
}
