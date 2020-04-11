<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Paramètres du Site -</title>
    </head>
    <body>
        <?php include('inc/header.php')?>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">🏉 Belvèze Razes MJC XIII</div>
                        <div class="card-body">
                            <h5 class="card-title">Paramètres du Site</h5>
                            <p class="card-text">Vous devez rentrer ici toutes les infos importantes du
                                site. Elles déterminerons l'apparition du site sur les moteurs de recherches
                                ainsi que sa popularité.
                                <br><br>
                                <b>Veillez à bien rentrer toutes les informations demandées !</b>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3">
                        <div class="card-header">ℹ️ Informations
                        </div>
                        <div class="card-body">
                            <form action="./informations_club.php" method="post">
                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                            <div class="form-group">
                                                <label>Nom du Site : <span class="textimportant">( entre 10 et 70 caractères )</span></label>
                                                <input class="form-control" type="text" placeholder="Nom du Site" name="titlesite">
                                                </div>
                                                <div class="form-group">
                                                <label>Description du Site : <span class="textimportant">( minimum 160 caractères et maximum 300 caractères )</span></label>
                                                <input class="form-control" type="text" placeholder="Description du Site" name="metadescsite">
                                               </div>
                                    <button type="submit" class="btn btn-primary float-right">Enregistrer les informations</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/js.js"></script>
    </body>
</html>