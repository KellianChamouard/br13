<?php

include('database.php');

$bdd->exec("SET CHARACTER SET utf8");
$retour = $bdd->query('SELECT * FROM articles ORDER BY id DESC');

while ($data = $retour->fetch())
{
 echo '<div class="card">
    <div class="card-body">
        <p>
            <b>'.$data["article_name"].'</b>
            | '.$data["article_date"].'</p>
        <a href="../database/delarticle.php?id='.$data['id'].'" class="badge badge-danger">Supprimer</a>
        <a href="form_modif_article.php?id='.$data['id'].'" class="badge badge-warning text-white">Modifier</a>
        <!-- <a href="#" class="badge badge-primary">Partager</a>
        <a href="#" class="badge badge-info">Voir sur le site</a> -->
    </div>
</div>
<br>';

}

$retour->closeCursor();
?>