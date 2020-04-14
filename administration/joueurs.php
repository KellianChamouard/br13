<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Joueurs -</title>
        <script src="./ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <?php include('../database/database.php');?>
        <?php include('inc/header.php')?>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">🏉 Belvèze Razes MJC XIII</div>
                        <div class="card-body">
                            <h5 class="card-title">Les Joueurs</h5>
                            <p class="card-text">Vous pouvez :
                                <ul>
                                    <li>Ajouter un jour</li>
                                    <li>Modifier un joueur</li>
                                    <li>Enlever un joueur</li>
                                </ul>

                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                    <div class="card bg-light mb-3">
                        <div class="card-header">Ajouter un joueur</div>
                        <div class="card-body">
                            <form action="../database/addplayer.php" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Nom</span>
                                            </div>
                                            <input
                                            name="pl_name"
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
                                            <input
                                            name="pl_firstname"
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
                                            <input name="pl_birthday" class="form-control" type="date" name="naissance">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Poids</span>
                                            </div>
                                            <input
                                            name="pl_poids"
                                                type="number"
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
                                            <input
                                            name="pl_taille"
                                                type="number"
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
                                            <select name="pl_poste" class="form-control" id="exampleFormControlSelect1">
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
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Photo du joueur</label>
                                            <input name="pl_photo" type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center align-items-center"><input class="btn btn-primary" type="submit" value="Créer le Joueur"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3" style="max-height:827px;">
                        <div class="card-header">🙎🏻‍♂️ Joueurs
                        </div>
                        <div class="card-body overflow-auto">

                            <?php include('../database/recupplayer.php');?>

                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/js.js"></script>
            </body>
        </html>