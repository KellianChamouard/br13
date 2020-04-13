<?php

include('database.php');

$id = $_GET['id'];

$bdd->exec("SET CHARACTER SET utf8");
$retourp = $bdd->query('SELECT * FROM articles WHERE ID = '.$id.'');
$datap = $retourp->fetch();

?>