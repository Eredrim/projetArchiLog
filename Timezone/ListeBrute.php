<?php
    include "Horloge.php";
    $horloge1 = new Horloge("Europe/Paris");
    echo '<div class="listPiece" style="background : '.$horloge1->getCouleur().'"><span>'.$horloge1->getVille().'</span><span class="right">'.$horloge1->getHeure().'</span></div>';
    $horloge2 = new Horloge("Europe/London");
    echo '<div class="listPiece" style="background : '.$horloge2->getCouleur().'"><span>'.$horloge2->getVille().'</span><span class="right">'.$horloge2->getHeure().'</span></div>';
    $horloge3 = new Horloge("Asia/Singapore");
    echo '<div class="listPiece" style="background : '.$horloge3->getCouleur().'"><span>'.$horloge3->getVille().'</span><span class="right">'.$horloge3->getHeure().'</span></div>';
    $horloge4 = new Horloge("Asia/Tokyo");
    echo '<div class="listPiece" style="background : '.$horloge4->getCouleur().'"><span>'.$horloge4->getVille().'</span><span class="right">'.$horloge4->getHeure().'</span></div>';
    

?>