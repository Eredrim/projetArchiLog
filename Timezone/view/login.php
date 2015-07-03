<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="view/css/global.css"/>
        <title></title>
    </head>
    <body>
        <form id="connexion" action="." method="post">
            <div>Connectez-vous...</div>
            <input name="login" placeholder="login"/><br>
            <input name="passwd" type="password" placeholder="mot de passe"/><br>
            <button name="loggingIn" type="submit">Se connecter</button>
            <br><br>
            <?php
            if(isset($errMsg)){
                echo $errMsg;
            }
            ?>
        </form>
    </body>
</html>
