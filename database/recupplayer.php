<?php

include('database.php');

$bdd->exec("SET CHARACTER SET utf8");
$playersretour = $bdd->query('SELECT * FROM players');

while ($dataplayers = $playersretour->fetch())
{
 echo '<div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <p>
                                                <b>'.$dataplayers['pl_name'].'</b>
                                                '.$dataplayers['pl_firstname'].'</p>
                                            <p>
                                            '.$dataplayers['pl_poste'].'</p>
                                            <a href="#" class="badge badge-danger">Supprimer</a>
                                            <a href="modif_joueur.php?id='.$dataplayers['id'].'" class="badge badge-warning text-white">Modifier</a>
                                            <a href="#" class="badge badge-info">Voir sur le site</a>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end align-items-center">
                                            <img
                                                src="'.$dataplayers['pl_photo'].'"
                                                alt="'.$dataplayers['pl_name'].'"
                                                style="width:100px; height:100px; border-radius:50px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>';


}


$playersretour->closeCursor();
?>

