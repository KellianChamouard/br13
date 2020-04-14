<?php

include('database.php');

$article_name = $_POST['article_name'];
$article_author = $_POST['article_author'];
$article_content = $_POST['article_content'];
$id = $_GET['id'];

$modifart = $bdd->prepare('UPDATE articles SET article_name = :article_name, article_author = :article_author, article_content = :article_content WHERE id = :id');
$modifart->execute(array(
    ':article_name' => $article_name,
    ':article_author' => $article_author,
    ':article_content' => $article_content,
    ':id' => $id
    ));

header('Location: ../administration/modif_article.php');
exit();

?>