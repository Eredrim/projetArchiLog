<?php

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

