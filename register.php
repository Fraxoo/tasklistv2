<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>

<body>

    <div class="main">

        <div class="acceuil">
            <a href="index.php">Acceuil</a>
        </div>

        <div class="register">
            <h2>Inscription</h2>
            <div class="action">
            <form action="register.php" method="post">
                <div class="nom">
                    <p>Votre Nom :</p>
                    <input type="text" name="nom" placeholder="nom :">
                </div>
                <div class="prenom">
                    <p>Votre Prenom :</p>
                    <input type="text" name="prenom" placeholder="prenom :">
                </div>
                <div class="email">
                    <p>Votre Email :</p>
                    <input type="email" name="email" placeholder="mail:">
                </div>
                <div class="mdp">
                    <p>Votre Mot de passe :</p>
                    <input type="password" name="password" placeholder="Mot De Passe">
                </div>
                <div class="submit">
                     <button type="submit">S'inscrire</button>
                </div>
            </form>
            <div class="deja">
            <p>Vous avez deja un compte ? <a href="login.php">Se Connecter</a></p>
        </div>
        </div>
       
    </div>

    </div>