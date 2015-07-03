<?php

include("./view/header.php");
include_once("./model/User.php");
if (isset($_POST["fuseau"])) {
    $user = new User($_COOKIE["LogedIn"]);
    $timezone_identifiers = DateTimeZone::listIdentifiers();
    if (in_array($_POST["fuseau"], DateTimeZone::listIdentifiers())) {
        $user->addToListeHorloge(new Horloge($_POST["fuseau"]));
    }
} elseif (isset($_POST["Suppr"])) {
    HorlogeDAO::suppressionHorlogeDAO($_POST["Suppr"]);
}
include('./view/gestionHorloges.php');

