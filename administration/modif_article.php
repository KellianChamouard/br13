<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Modifier un article -</title>
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
                            <h5 class="card-title">Modifier un article</h5>
                            <p class="card-text">Choisissez l'article à modifier et modifiez le à votre guise !
                                <br><br>
                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3" style="max-height:500px;">
                        <div class="card-header">📝 Modifier un article
                            <form class="form-inline my-2 my-lg-0 float-right">
                                <input
                                    class="form-control mr-sm-2 border border-secondary"
                                    type="search"
                                    placeholder="Chercher un article"
                                    aria-label="Search">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit">🔎</button>
                            </form>
                        </div>
                        <div class="card-body overflow-auto">

                           <?php include('../database/recuparticle.php');?> 

                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/js.js"></script>
            </body>
        </html>