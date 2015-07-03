<?php

include "../model/UserManager.php";
$um = UserManager::getInstance();
$horloges = $um->getHorloges();
foreach ($horloges as $horloge) {
    echo '<div class="listPiece" style="background : ' . $horloge->getCouleur() . '"><span>' . $horloge->getVille() . '</span><span class="right">' . $horloge->getHeure() . '</span></div>';
}
?>