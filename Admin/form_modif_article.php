<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Modifier un article -</title>
        <script src="./ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <?php include('inc/header.php')?>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">🏉 Belvèze Razes MJC XIII</div>
                        <div class="card-body">
                            <p class="card-title">Modifier l'Article : <b>Nom de l'article</b></p>
                            <p class="card-text">Pensez à enregistrer les modifications ! 
                                <br><br>
                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">📝 Modifier l'article : <b>Nom de l'article</b>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                <label>Titre</label>
                                    <input class="form-control" type="text" placeholder="Titre de l'article">
                                </div>
                                <div class="form-group">
                                <label>Auteur</label>
                                    <input class="form-control" type="text" placeholder="Auteur">
                                </div>
                                <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="publidate" readonly>
                                </div>
                                <div class="form-group">
                                <label>Heure</label>
                                <input class="form-control" type="time" name="publitime" readonly>
                                </div>
                                <div class="form-group">
                                <label>Article</label>
                                    <textarea name="editor1" id="editor1" rows="10" cols="80">
                                        Écrivez votre article ici !
                                    </textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor instance, using default
                                        // configuration.
                                        CKEDITOR.replace('editor1');
                                    </script><br>
                                    <input
                                        class="btn btn-primary float-right"
                                        type="submit"
                                        value="Enregistrer">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/js.js"></script>
            </body>
        </html>