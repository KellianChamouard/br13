<?php

include('database.php');

$article_name = $_POST['article_name'];
$article_author = $_POST['article_author'];
$article_date = $_POST['article_date'];
$article_time = $_POST['article_time'];
$article_content = $_POST['article_content'];

$req = $bdd->prepare('INSERT INTO articles(article_name, article_author, article_date, article_time, article_content) VALUES(:article_name, :article_author, :article_date, :article_time, :article_content)');
$req->execute(array(
    'article_name' => $article_name, 
    'article_author' => $article_author, 
    'article_date' => $article_date, 
    'article_time' => $article_time, 
    'article_content'=> $article_content
	));

	header('Location: ../administration/modif_article.php');
	exit();
?>