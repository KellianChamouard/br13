<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Modifier un article -</title>
        <script src="./ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <?php include('../database/modifarticle.php');?>
        <?php include('inc/header.php')?>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">🏉 Belvèze Razes MJC XIII</div>
                        <div class="card-body">
                            <p class="card-title">Modifier l'Article :
                                <b>Nom de l'article</b>
                            </p>
                            <p class="card-text">Pensez à enregistrer les modifications !
                                <br><br>
                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">📝 Modifier l'article :
                            <b><?php echo $datap['article_name'];?></b>
                        </div>
                        <div class="card-body">
                            <form action="../database/formarticlemodif.php?id=<?php echo $datap['id'];?>" method="post">
                                <div class="form-group">
                                    <label>Titre</label>
                                    <input
                                    name="article_name"
                                        class="form-control"
                                        type="text"
                                        value="<?php echo $datap['article_name'];?>"
                                        placeholder="Titre de l'article">
                                </div>
                                <div class="form-group">
                                    <label>Auteur</label>
                                    <input
                                    name="article_author"
                                        class="form-control"
                                        type="text"
                                        value="<?php echo $datap['article_author'];?>"
                                        placeholder="Auteur">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input
                                    name="article_date"
                                        class="form-control"
                                        type="date"
                                        name="publidate"
                                        value="<?php echo $datap['article_date'];?>"
                                        readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Heure</label>
                                    <input
                                    name="article_time"
                                        class="form-control"
                                        type="time"
                                        name="publitime"
                                        value="<?php echo $datap['article_time'];?>"
                                        readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Article</label>
                                    <textarea name="article_content" id="editor1" rows="10" cols="80">
                                        <?php echo $datap['article_content'];?>
                                    </textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor instance, using default
                                        // configuration.
                                        CKEDITOR.replace('editor1');
                                    </script><br>
                                    <input class="btn btn-primary float-right" type="submit" value="Enregistrer">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/js.js"></script>
            </body>
        </html>