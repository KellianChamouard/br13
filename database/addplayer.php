<?php

include('database.php');

$pl_name = $_POST['pl_name'];
$pl_firstname = $_POST['pl_firstname'];
$pl_birthday = $_POST['pl_birthday'];
$pl_poids = $_POST['pl_poids'];
$pl_taille = $_POST['pl_taille'];
$pl_poste = $_POST['pl_poste'];
$pl_photo = $_POST['pl_photo'];

$addplayers = $bdd->prepare('INSERT INTO players(pl_name, pl_firstname, pl_birthday, pl_poids, pl_taille, pl_poste, pl_photo) VALUES(:pl_name, :pl_firstname, :pl_birthday, :pl_poids, :pl_taille, :pl_poste, :pl_photo)');
$addplayers->execute(array(
    ':pl_name' => $pl_name, 
    ':pl_firstname' => $pl_firstname, 
    ':pl_birthday' => $pl_birthday, 
    ':pl_poids' => $pl_poids, 
    ':pl_taille'=> $pl_taille,
    ':pl_poste'=> $pl_poste,
    ':pl_photo'=> $pl_photo
    ));

var_dump($addplayers);

	header('Location: ../administration/joueurs.php');
	exit();
?>