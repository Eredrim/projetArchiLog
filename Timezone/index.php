<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <script src="js/script.js"></script>
        <script src="js/jquery-2.1.3.min.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="css/global.css">-->
        <title></title>
    </head>
    <body>
        <div class="gridPiece" id="gp1">
            <div class="clock">
                <div class="hour"></div>
                <div class="minute"></div>
            </div>
            <?php
                include "Horloge.php";
                $horloge1 = new Horloge("Europe/Paris");
                echo '<script>$(".hour").css("transform", "rotate(' . $horloge1->getAngleAigHeure() . 'deg)");';
                echo '$(".minute").css("transform", "rotate(' . $horloge1->getAngleAigMin() . 'deg)");</script>';
                echo '<div class="ville">'.strtoupper($horloge1->getVille()).'</div>';
                echo '<div class="date">'.$horloge1->getDate().'</div>';
            ?>
        </div>
    </body>
</html>
