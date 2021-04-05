<?php include('config/actions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sazuravisuals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <!-- TweenMax - GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.4/TweenMax.min.js"></script>
    <!-- bundle bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <!-- FOND ÉTOILÉ-->
    <div class="stars"></div>
    <div class="twinkling"></div>

   <!-- MENU -->
   <header>    
        <div id="menu-web">
            <a class="toplogo" href="?action=home">
                <img src="public/img/sazura_logo_blanc.png" alt="sazura_logo_blanc">
            </a>

            <div class="progress-bar"></div>

            <ul id="menu-left">
                <li><a id="graphisme" href="?action=graphisme">Graphisme</a></li>
                <li><a id="photographie" href="?action=photographie">Photographie</a></li>
                <li><a id="boutique" href="?action=boutique">Boutique</a></li>
            </ul>
    
            <ul id="menu-right">
                <li><a id="contact" href="?action=contact">Contact</a></li>
            </ul>

        </div>
    </header>
    
    <div>
        <div>
            <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->
            <div>
                <?php
                // Quelle est l'action à faire ?
                if (isset($_GET["action"])) {
                    $action = $_GET["action"];
                } else {
                    $action = "home";
                }

                // Est ce que cette action existe dans la liste des actions
                if (array_key_exists($action, $listeDesActions) == false) {
                    include("vues/404.php"); // NON : page 404
                } else {
                    include($listeDesActions[$action]); // Oui, on la charge
                }

                ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
                ?>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>