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
        <form action="register.php" method="post">
            <p>Votre Nom :</p>
                <input type="text" name="nom">
            <p>Votre Prenom :</p>
                <input type="text" name="prenom">
            <p>Votre Email :</p>
                <input type="email" name="email">
            <p>Votre Mot de passe :</p>
                <input type="password" name="password">
            <button>S'inscrire</button>

        </form>
    </div>

</div>
