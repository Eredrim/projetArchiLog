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
        </div>
        <?php
            include "Horloge.php";
            $horloge1 = new Horloge("Europe/Paris");
            $angleH = intval(explode(":",$horloge1->getHeure())[0])/12*360%360;
            $angleM = intval(explode(":",$horloge1->getHeure())[1])/60*360;
            echo '<script>$(".hour").css("transform", "rotate('.$angleH.'deg)");';
            echo '$(".minute").css("transform", "rotate('.$angleM.'deg)");</script>';
        ?>
        
    </body>
</html>
