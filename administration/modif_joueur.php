<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Modifier un joueur -</title>
        <script src="./ckeditor/ckeditor.js"></script>
    </head>
    <body>
           <?php include('inc/header.php')?>

           <?php include('../database/formplayermodif.php')?>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">🏉 Belvèze Razes MJC XIII</div>
                        <div class="card-body">
                            <h5 class="card-title">Modifier un joueur</h5>
                            <p class="card-text">Modifier la fiche de
                                <b>Nom du Joueur</b>
                                <br><br>
                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3" style="max-height:500px;">
                        <div class="card-header">🙎🏻‍♂️ Modifier la fiche de
                            <b><?php echo $dataplayrecu['pl_name'];?> <?php echo $dataplayrecu['pl_firstname'];?></b>
                        </div>
                        <div class="card-body overflow-auto">
                            <form action="../database/modifjoueur.php" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Nom</span>
                                            </div>
                                            <input value="<?php echo $dataplayrecu['pl_name'];?>" name="pl_name"
                                                type="text"
                                                class="form-control"
                                                placeholder="Nom"
                                                aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Prénom</span>
                                            </div>
                                            <input value="<?php echo $dataplayrecu['pl_firstname'];?>" name="pl_firstname"
                                                type="text"
                                                class="form-control"
                                                placeholder="Prénom"
                                                aria-label="Prénom"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Date de Naissance</span>
                                            </div>
                                            <input value="<?php echo $dataplayrecu['pl_birthday'];?>" name="pl_birthday" class="form-control" type="date" name="naissance">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Poids</span>
                                            </div>
                                            <input value="<?php echo $dataplayrecu['pl_poids'];?>" name="pl_poids"
                                                type="text"
                                                class="form-control"
                                                aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">kg</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Taille</span>
                                            </div>
                                            <input value="<?php echo $dataplayrecu['pl_taille'];?>" name="pl_taille"
                                                type="text"
                                                class="form-control"
                                                aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">cm</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Poste</span>
                                            </div>
                                            <select value="<?php echo $dataplayrecu['pl_poste'];?>" name="pl_poste" class="form-control" id="exampleFormControlSelect1">
                                                <option>Arrière</option>
                                                <option>Aillier</option>
                                                <option>Centre</option>
                                                <option>Demi d'Ouverture</option>
                                                <option>Demi de Mêlée</option>
                                                <option>Troisième Ligne</option>
                                                <option>Seconde Ligne</option>
                                                <option>Pilier</option>
                                                <option>Talonneur</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-between">
                                        <img
                                            src="<?php echo $dataplayrecu['pl_photo'];?>"
                                            alt="Nom du Joueur"
                                            style="width:100px; height:100px; border-radius:50px;">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Photo du joueur</label>
                                            <input value="<?php echo $dataplayrecu['pl_photo'];?>" name="pl_photo" type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center align-items-center"><input class="btn btn-primary" type="submit" value="Modifier le joueur"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/js.js"></script>
            </body>
        </html>