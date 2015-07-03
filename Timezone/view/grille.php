<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="view/css/grid.css">
        <link rel="stylesheet" type="text/css" href="view/css/global.css">
        <script src="js/script.js"></script>
        <script src="js/jquery-2.1.3.min.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="css/global.css">-->
        <title></title>
    </head>
    <body>
        <?php
        include 'header.php';
        $um = UserManager::getInstance();
        $horloges = $um->getHorloges();
        $i = 1;
        echo "<div id=wrapper>";
        foreach ($horloges as $horloge) {
            echo "<div class='gridPiece' style='background: " . $horloge->getCouleur() . ";' id='gp1'>";
            echo '<div class="clock">';
            echo '<div class="hour" id="h' . $i . '"></div>';
            echo '<div class="minute" id="m' . $i . '"></div>';
            echo '</div>';
            echo '<script>$("#h' . $i . '").css("transform", "rotate(' . $horloge->getAngleAigHeure() . 'deg)");';
            echo '$("#m' . $i . '").css("transform", "rotate(' . $horloge->getAngleAigMin() . 'deg)");</script>';
            echo '<div class="ville">' . strtoupper($horloge->getVille()) . '</div>';
            echo '<div class="date">' . $horloge->getDate() . '</div></div>';
            $i++;
        }
        echo "</div>";
        ?>
        <a href="./?v=liste">
            <div class="footer">
                Passer à la vue liste
            </div>
        </a>
    </div>
</body>
</html>
