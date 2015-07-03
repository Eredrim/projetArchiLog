<?php

include("model/UserManager.php");

if (!isset($_COOKIE["LogedIn"])) {
    if (isset($_POST["loggingIn"])) {
        $um = UserManager::getInstance();
        if ($um->verifUser($_POST["login"], $_POST["passwd"])) {
            echo "<script>document.location='./'</script>";
        } else {
            $errMsg = '<span>Couple login/mot de passe invalide</span>';
            include('./view/login.php');
        }
    }
    else
    {
        include('./view/login.php');
    }
} elseif (isset($_GET["v"])) {
    include('./view/'. $_GET["v"] . '.php');
} else {
    include('./view/grille.php');
}

    