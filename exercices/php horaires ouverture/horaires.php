<?php
require_once 'functions.php';
require_once 'config.php';
// $horaires = creneaux_html(CRENEAUX);
$jourSemaine = Date('N');
var_dump($jourSemaine);
$classDay = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <h1>Nos horaires</h1>

    <!-- <p>de 9h à 12h et de 14h à 18h</p> -->
    <ul>
        <?php foreach(JOURS as $k => $jour): ?>
        <?php if($k === (int)$jourSemaine-1 ):  ?>
            <?php $classDay="active-day" ?>
        <?php endif; ?>
        <li class="<?=$classDay?>"><?= $jour .' : '. creneaux_html(CRENEAUX[$k]);  ?></li>
        <?php endforeach; ?>
    </ul>
</div>
    
</body>
</html>

