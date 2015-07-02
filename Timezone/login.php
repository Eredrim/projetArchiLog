<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/global.css"/>
        <title></title>
    </head>
    <body>
        <form id="connexion" action="login.php" method="post">
            <div>Connectez-vous...</div>
            <input name="login" placeholder="login"/><br>
            <input name="passwd" type="password" placeholder="mot de passe"/><br>
            <button name="envoi" type="submit">Se connecter</button>
            <br><br>
            <?php
            include 'UserManager.php';
            if(isset($_POST["envoi"])){
                $um = UserManager::getInstance();
                if($um->verifUser($_POST["login"], $_POST["passwd"])){
                    echo "<script>document.location.href='./'</script>";
                }
                else
                {
                    echo "<span>Couple login/mot de passe invalide</span>";
                }
            }
            ?>
        </form>
    </body>
</html>
