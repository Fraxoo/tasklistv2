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

$acount_id = 0;

$tache = $_POST['tache'];

if(isset($tache)){

    $addtaskbdd = $bdd->prepare('INSERT INTO task(task,acount_id) VALUES (:task,:acount_id)');
    $addtaskbdd->execute([
        'task' => $tache,
        'acount_id'=> $acount_id
    ]);

}






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
<?php if(!isset($_SESSION['id'])):?>

<div class="top">
    <a href="register.php">S'inscrire</a>
    <a href="login.php">Se connecter</a>
</div>
<?php else: ?>
<div class="nom">
    <p>Bonjour <?= $_SESSION['prenom']?></p>
</div>
<?php endif ?>
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