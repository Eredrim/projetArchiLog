<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/liste.css">
        <link rel="stylesheet" type="text/css" href="css/global.css">
        <script src="js/script.js"></script>
        <script src="js/jquery-2.1.3.min.js"></script>
        <title></title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div id="container"></div>
        <!--<div class="listPiece" style="background: blueviolet"><span>Hello world !</span></div>-->
        <script>
            charger();
            setInterval(function() {charger();}, 1000);
        </script>
    </body>
</html>
