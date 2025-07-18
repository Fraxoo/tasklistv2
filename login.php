<?php
session_start();

$user = "root";
$pass = "root";

try

{
$bdd = new PDO('mysql:host=127.0.0.1;port=3306;dbname=app-database', $user, $pass);
}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}

$mail = $_POST['email'];
$mdp = $_POST['password'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style3.css">
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
            <h2>Connexion</h2>
            <div class="action">
            <form action="login.php" method="post">
                <div class="email">
                    <p>Votre Email :</p>
                    <input type="email" name="email" placeholder="mail:" required>
                </div>
                <div class="mdp">
                    <p>Votre Mot de passe :</p>
                    <input type="password" name="password" placeholder="Mot De Passe" required>
                </div>
                <div class="submit">
                     <button type="submit">Se connecter</button>
                </div>
            </form>
            <div class="deja">
            <p>Vous n'avez pas de compte ? <a href="register.php">S'inscrire</a></p>
        </div>
        </div>
       
    </div>

    </div>