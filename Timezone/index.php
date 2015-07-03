<?php

include("model/UserManager.php");

if (!isset($_COOKIE["LogedIn"])) {
    include('./ctrl/login.php');
} elseif (isset($_GET["v"])) {
    include('./ctrl/'. $_GET["v"] . '.php');
} else {
    include('./ctrl/grille.php');
}

    