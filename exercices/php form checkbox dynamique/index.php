<?php
$parfums = [
    "Vanille"=> 5,
    "Fraise"=>  3,
    "Citron"=> 2.5,
];
        
$contenants = [
    "Cornet"=> 2,
    "Pot"=>  4
];

$supplements = [
    "fruits"=> 3.5,
    "pepites de chocolat"=>  2,
    "coulis" => 2.5
];

require "functions.php";

// TRAITEMENT DES DONNEES DU FORMULAIRE

$mesIngredients = null;
$monContenant="à choisir";
$mesSupplements = null;
$prixTotal = 0;



if(isset($_GET['parfum'])){
    foreach($_GET['parfum'] as $oneParfum ){
        if(isset($parfums[$oneParfum])){
            $mesIngredients[] = $oneParfum;
            $prixTotal += $parfums[$oneParfum];
        }
    }
}

if(isset($_GET['contenant'])){
    
    $choixContenant = htmlspecialchars($_GET['contenant']);
    
    if(isset($contenants[$choixContenant])){
        $monContenant = $choixContenant;
        $prixTotal += $contenants[ $choixContenant];
    }
}

if(isset($_GET['mon_supplement'])){
    
   foreach($_GET['mon_supplement'] as $oneSupp){
       
       if(isset($supplements[$oneSupp])){
           $mesSupplements[] = $oneSupp;
           $prixTotal += $supplements[$oneSupp];
       }
   }
}
?>


<!--HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Exercie PHP</title>
</head>
<body>

    <!-- intégration du menu  -->
    <?php require "menu.php" ?>

    <!-- Formulaire-->
    <form action="" method="GET">
        
        <div>
            <?php foreach($parfums as $parfum => $prix): ?>
            <?= checkboxCheked("parfum", $parfum , $_GET) ?>
            <?='<label for="">'.$parfum.' - '.$prix .'€ </label>' ?>
            <?php endforeach; ?>
        </div>
        
        <div>
            <?php foreach($contenants as $contenant => $prix): ?>
            <?=radio("contenant",$contenant, $_GET)?>
            <label><?=$contenant.' - '.$prix.' €' ?></label>
            <?php endforeach; ?>
        </div>
        
        <div>
            <?php foreach($supplements as $supp => $prix): ?>
            <?= checkboxCheked('mon_supplement', $supp, $_GET ); ?>
            <?= '<label>'. $supp .' - '. $prix .' € </label>' ?>
            <?php endforeach;?>
        </div>

        
        <input type="submit" name="Valider"/>
    </form>

    <!-- Synthese commandes-->


    <p>Vos parfums :</p>

    <?php if($mesIngredients):?>
    <ul>
        <?php foreach($mesIngredients as $choix) :?>
        <li><?= htmlspecialchars($choix) ?></li>
        <?php endforeach;?>
    </ul>
    <?php elseif(!$mesIngredients): ?>
        <p>Veuillez faire votre choix</p>
    <?php endif; ?>

    <p>Votre contenant :</p>
    <p> <?= htmlspecialchars($monContenant) ?> </p>


    <p>Vos supplements :</p>
    <?php if($mesSupplements):?>
    <ul>
        <?php foreach($mesSupplements as $choix) :?>
        <li><?= htmlspecialchars($choix) ?></li>
        <?php endforeach;?>
    </ul>
    <?php elseif(!$mesSupplements): ?>
        <p>pas de suppléments choisis</p>
    <?php endif; ?>



    <p>Montant total :</p>
   <strong><?= htmlspecialchars($prixTotal) .' €' ?></strong>
    
</body>
</html>


