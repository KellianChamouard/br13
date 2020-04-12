<?php

include('database.php');

$bdd->exec("SET CHARACTER SET utf8");
$retourp = $bdd->query('SELECT url_social FROM social WHERE ID = 1');
$datap = $retourp->fetch();

$bdd->exec("SET CHARACTER SET utf8");
$retours = $bdd->query('SELECT url_social FROM social WHERE ID = 2');
$datas = $retours->fetch();

$bdd->exec("SET CHARACTER SET utf8");
$retourt = $bdd->query('SELECT url_social FROM social WHERE ID = 3');
$datat = $retourt->fetch();

$bdd->exec("SET CHARACTER SET utf8");
$retourq = $bdd->query('SELECT url_social FROM social WHERE ID = 4');
$dataq = $retourq->fetch();


?>