<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <div id="container"></div>
        <div class="listPiece" style="background: blueviolet"><span>Hello world !</span></div>
        <script>
            charger();
            setInterval(function() {charger();}, 1000);
        </script>
    </body>
</html>
