<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Écrire un article -</title>
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
                            <h5 class="card-title">Écrire un article</h5>
                            <p class="card-text">Veillez à faire des articles de qualité, ni trop long ni
                                pas assez, contenant des information éssentielles et des mots clés importants.
                                <br><br>
                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">📝 Écrire un article
                        </div>
                        <div class="card-body">
                            <form method="post" action="../database/addarticle.php">
                                <div class="form-group">
                                    <label>Titre</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        placeholder="Titre de l'article"
                                        name="article_name">
                                </div>
                                <div class="form-group">
                                    <label>Auteur</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        placeholder="Auteur"
                                        name="article_author">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input class="form-control" type="date" name="article_date">
                                </div>
                                <div class="form-group">
                                    <label>Heure</label>
                                    <input class="form-control" type="time" name="article_time">
                                </div>
                                <div class="form-group">
                                    <label>Article</label>
                                    <textarea name="article_content" id="editor1" rows="10" cols="80"></textarea><br>
                                    </div>
                                    <input
                                        class="btn btn-primary float-right"
                                        type="submit"
                                        value="Mettre en ligne">
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor instance, using default
                    // configuration.
                    CKEDITOR.replace('editor1');
                </script>
                <script type="text/javascript" src="js/js.js"></script>
            </body>
        </html>