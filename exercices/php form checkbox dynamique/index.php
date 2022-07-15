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
<strong><?= htmlspecialchars($prixTotal) ?></strong>
