<?php

include('database.php');

$datenote = $_POST['datenote'];
$importancenote = $_POST['importancenote'];
$contentnote = $_POST['contentnote'];

$req = $bdd->prepare('INSERT INTO notes(date_note, importance_note, content_note) VALUES(:date_note, :importance_note, :content_note)');
$req->execute(array(
	'date_note' => $datenote,
	'importance_note' => $importancenote,
	'content_note' => $contentnote,
	));

	header('Location: ../administration/index.php');
	exit();
?>