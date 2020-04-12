<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Dirigeants -</title>
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
                            <h5 class="card-title">Les Dirigeants</h5>
                            <p class="card-text">Vous pouvez :
                                <ul>
                                    <li>Ajouter Dirigeant</li>
                                    <li>Modifier Dirigeant</li>
                                    <li>Enlever Dirigeant</li>
                                </ul>

                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                    <div class="card bg-light mb-3">
                        <div class="card-header">Ajouter Dirigeant</div>
                        <div class="card-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Nom</span>
                                            </div>
                                            <input
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
                                                type="text"
                                                class="form-control"
                                                placeholder="Prénom"
                                                aria-label="Prénom"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Qualité</span>
                                            </div>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Président.e</option>
                                                <option>Co Président.e</option>
                                                <option>Gestionnaire</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Photo</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center align-items-center"><input class="btn btn-primary" type="submit" value="Créer"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3" style="max-height:827px;">
                        <div class="card-header">🙎🏻‍♂️ Dirigeants
                            <div class="form-group float-right ml-2">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Président.e</option>
                                    <option>Co Président.e</option>
                                    <option>Gestionnaire</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body overflow-auto">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <p>
                                                <b>Nom</b>
                                                Prénom</p>
                                            <p>
                                                Qualité</p>
                                            <a href="#" class="badge badge-danger">Supprimer</a>
                                            <a href="modif_dirigeants.php" class="badge badge-warning text-white">Modifier</a>
                                            <a href="#" class="badge badge-info">Voir sur le site</a>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end align-items-center">
                                            <img
                                                src="http://placehold.it/100x100"
                                                alt="Nom du Joueur"
                                                style="width:100px; height:100px; border-radius:50px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/js.js"></script>
            </body>
        </html>