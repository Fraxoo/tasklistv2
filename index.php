<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>


<body>
    
<div class="top">
    <a href="register.php">S'inscrire</a>
    <a href="login.php">Se connecter</a>
</div>

<div class="main">

    <div class="titre">
        <p>MA</p>
        <h1>To Do List</h1> 
    </div>

    <div class="add">
        <form action="/" method="post">
            <input type="text" name="tache" placeholder="Ajoutez une tache :" required>
            <button>Ajoutez tache</button>
        </form>
    </div>

    <div class="remove">
        <button>Supprimer Tache</button>
    </div>


</div>

</body>


</html>