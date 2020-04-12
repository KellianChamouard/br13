<?php

include('database.php');

$bdd->exec("SET CHARACTER SET utf8");
$retour = $bdd->query('SELECT * FROM notes');

while ($data = $retour->fetch())
{
if ($data['importance_note'] == 'Très Important')
{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.$data["date_note"].' : </strong>'.$data['content_note'].'
</div>';
}
elseif ($data['importance_note'] == 'Important')
{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>'.$data["date_note"].' : </strong>'.$data['content_note'].'
</div>';
}
else
{
    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>'.$data["date_note"].' : </strong>'.$data['content_note'].'
</div>';
}
}
$retour->closeCursor();
?>