<?php

$source = "mysql:host=localhost;dbname=gsbv2";
$utilisateur = "admin";
$mot_de_passe = "password";
print_r($_POST["login"]);
$db = new PDO($source, $utilisateur, $mot_de_passe);

$sql_select = "SELECT * FROM visiteur where login=:p1 and mdp=:p2";
$st = $db-> prepare($sql_select);
$st->bindParam(":p1", $_POST["login"]);
$st->bindParam(":p2", $_POST["mdp"]);

$st->execute();

$resultat = $st->fetchAll();
print_r($resultat);

?>