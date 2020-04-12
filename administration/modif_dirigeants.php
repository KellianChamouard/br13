<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Modifier un Dirigeant -</title>
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
                            <h5 class="card-title">Modifier un Dirigeant</h5>
                            <p class="card-text">Modifier la fiche de
                                <b>Nom du Dirigeant</b>
                                <br><br>
                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3" style="max-height:500px;">
                        <div class="card-header">🙎🏻‍♂️ Modifier la fiche de
                            <b>Nom du Dirigeant</b>
                        </div>
                        <div class="card-body overflow-auto">
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
                                    <div class="col-6 d-flex justify-content-center align-items-center"><input class="btn btn-primary" type="submit" value="Modifier"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/js.js"></script>
            </body>
        </html>