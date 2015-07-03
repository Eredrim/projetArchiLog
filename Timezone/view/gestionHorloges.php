        <div id="wrapper">
            <form action="./?v=gestionHorloges" method="POST" id="searchTimeZone">
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
