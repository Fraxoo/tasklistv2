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

?>