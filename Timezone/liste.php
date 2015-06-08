<?php include "Horloge.php" ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/liste.css">
        <link rel="stylesheet" type="text/css" href="css/global.css">
        <title></title>
    </head>
    <body>
        <div class="listPiece"><span>
            <?php
                $horloge1 = new Horloge("Europe/Paris");
                echo($horloge1->getHeure());
            ?>
            </span></div>
        <div class="listPiece" style="background: blueviolet"><span>Hello world !</span></div>
    </body>
</html>
