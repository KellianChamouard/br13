<?php

include('database.php');

$id = $_GET['id'];

$delart = $bdd->prepare('DELETE FROM articles WHERE id = :id');
$delart->execute(array(
	':id' => $id
    ));

var_dump($req);

    header('Location: ../administration/modif_article.php');
    exit();

?>