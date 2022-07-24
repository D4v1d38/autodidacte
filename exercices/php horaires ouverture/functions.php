<?php

function creneaux_html(array $creneaux){
    if(empty($creneaux)){
        return "Fermé";
    }
    $phrase=[];
    foreach($creneaux as $creneau){
        $phrase[] = "de <strong>$creneau[0] h </strong> à <strong> $creneau[1] h </strong>";
    }
    return implode(' et ', $phrase);

}