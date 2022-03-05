<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Page accueil</title>
</head>
<body>

    <?php require_once 'include/header.php'; ?>

    <h1>Accueil</h1>

    <p><a href="formulaire.php" style="color: #000">Formulaire</a></p>


   <?php
        setcookie(
            'notre_cookie',
            'info',
            [
                'expires' => time()+20,
                'secure' => true,
                'httponly' => true
            ]
        );

        if (isset($_COOKIE['notre_cookie'])){
            echo 'Bonjour';
        }
   ?>


    <?php require_once 'include/footer.php'; ?>




</body>
</html>