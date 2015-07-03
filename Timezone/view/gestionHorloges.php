<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="view/css/global.css">
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <?php
        include "header.php";
        include_once "/model/User.php";
        if(isset($_POST["fuseau"])){
            $user = new User($_COOKIE["LogedIn"]);
            $timezone_identifiers = DateTimeZone::listIdentifiers();
            if(in_array($_POST["fuseau"], DateTimeZone::listIdentifiers())){
                $user->addToListeHorloge(new Horloge($_POST["fuseau"]));
            }
        }
        elseif(isset($_POST["Suppr"])){
            HorlogeDAO::suppressionHorlogeDAO($_POST["Suppr"]);
        }
        ?>
        <div id="wrapper">
            <form action="./gestionHorloges.php" method="POST" id="searchTimeZone">
                <div id="search-wrapper">
                    <input name="fuseau" list="listeTZ" autocomplete="off"/><div onclick="$('#searchTimeZone').submit()">+</div>
                </div>
                <datalist id="listeTZ">
                    <?php
                    $timezone_identifiers = DateTimeZone::listIdentifiers();
                    for ($i = 0; $i < count($timezone_identifiers); $i++) {
                        echo "<option class='searchOption' value='$timezone_identifiers[$i]'>$timezone_identifiers[$i]</option>\n";
                    }
                    ?>
                </datalist>
                <div id="lstHorlogesTitre">Liste des horloges</div>
                <?php
                    if(!isset($user)){
                        $user = new User($_COOKIE["LogedIn"]);
                    }
                    $horloges = $user->getListeHorloges();
                    foreach($horloges as $hor){
                        echo "<div class='horlogeToSuppr' id='hor".$hor->getID()."'>".$hor->getLocalisation()
                                ."<div onclick='supprHorloge(".$hor->getID().")'>&#10006;</div></div>\n";
                    }
                ?>
            </form>
        </div>
    <script>
        $("#plus-button").html("&#8617;");
        $("#plus-button").parent().attr("href", "./");
    </script>
    </body>
</html>
