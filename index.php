<?php
session_start();

$user = "root";
$pass = "root";

try {
    $bdd = new PDO('mysql:host=127.0.0.1;port=3306;dbname=app-database', $user, $pass);
} catch (Exception $e) {

    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['check'])) {
foreach ($_POST['check'] as $checkid) {
$del = $bdd->prepare('DELETE FROM task WHERE id = :id AND acount_id = :acount_id');
$del->execute([
   'id' => $checkid,
   'acount_id' => $_SESSION['id']
]);
}
}


$tache = $_POST['tache'];

if (isset($tache)) {

    $addtaskbdd = $bdd->prepare('INSERT INTO task(task,acount_id) VALUES (:task,:acount_id)');
    $addtaskbdd->execute([
        'task' => $tache,
        'acount_id' => $_SESSION['id']
    ]);
}

$taskbdd = $bdd->query('SELECT * FROM task');
$taskbdd->execute();
$tasks = $taskbdd->fetchAll();




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
    <?php if (!isset($_SESSION['id'])): ?>

        <div class="top">
            <a href="register.php">S'inscrire</a>
            <a href="login.php">Se connecter</a>
        </div>
    <?php else: ?>
        <div class="top2">
            <div class="nom">
                <p>Bonjour <?= $_SESSION['prenom'] ?></p>
            </div>
            <div class="deco">
                <a href="logout.php">Se Deconecter</a>
            </div>
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

        <div class="list">
            <?php foreach ($tasks as $task): ?>

                <?php if ($_SESSION['id'] == $task['acount_id']): ?>

                    <form action="/" method="post">

                    <div class="tasks">

                        

                            <input type="checkbox" name="check[]" value=<?php echo $task['id']?>>

                            <?= $task['task'] ?>
                        
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
        <div class="remove">
            <button type="submit">Supprimer Tache</button>
        </div>
        </form>

    </div>

</body>


</html>