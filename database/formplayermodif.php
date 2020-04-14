<?php

include('database.php');

$id = $_GET['id'];

$bdd->exec("SET CHARACTER SET utf8");
$retourplay = $bdd->query('SELECT * FROM players WHERE ID = '.$id.'');
$dataplayrecu = $retourplay->fetch();

?>