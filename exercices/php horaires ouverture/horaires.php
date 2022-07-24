<?php
require_once 'functions.php';
require_once 'config.php';
// $horaires = creneaux_html(CRENEAUX);

?>
<div>
    <h1>Nos horaires</h1>

    <!-- <p>de 9h à 12h et de 14h à 18h</p> -->
    <ul>
        <?php foreach(JOURS as $k => $jour): ?>
        <li><?= $jour .' : '. creneaux_html(CRENEAUX[$k]);  ?></li>
        <?php endforeach; ?>
    </ul>
</div>