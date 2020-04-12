<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Paramètres du Club -</title>
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
                            <h5 class="card-title">Paramètres du Club</h5>
                            <p class="card-text">Vous devez rentrer ici toutes les informations concernant
                                le club. Que ce soit son nom, ses couleurs, sa localisation, etc...
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
                                                <label>Nom du club :</label>
                                                <input class="form-control" type="text" placeholder="Nom du club">
                                                <br>
                                                <label>Ville :</label>
                                                <input class="form-control" type="text" placeholder="Ville">
                                                <br>
                                                <label>Code postal :</label>
                                                <input class="form-control" type="text" placeholder="Code postal">
                                                <br>
                                                <label>Département :</label>
                                                <input class="form-control" type="text" placeholder="Département">
                                                <br>
                                                <label for="exampleFormControlInput1">Adresse mail :</label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="exampleFormControlInput1"
                                                    placeholder="nom@example.com">
                                                <br>
                                                <label>Télephone :</label>
                                                <input class="form-control" type="text" placeholder="téléphone">
                                                <br>
                                            </div>
                                            <div class="col-6">
                                                <label for="exampleFormControlFile1">Logo du club
                                                    <b>(300x350px max)</b>
                                                </label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                <br>
                                            </div>
                                            <div class="col-6">
                                                <label>Couleurs du site
                                                    <b>(En général, celles de l'équipe)</b>
                                                </label>
                                                <br>
                                                <input type="color" id="principal" name="principal" value="#FFFFFF">
                                                <label for="principal">Couleur 1</label>
                                                <br>
                                                <input type="color" id="secondaire" name="secondaire" value="#FFFFFF">
                                                <label for="secondaire">Couleur 2</label>
                                                <br>
                                                <input type="color" id="troisieme" name="troisieme" value="#FFFFFF">
                                                <label for="troisieme">Couleur 3</label>
                                            </div>
                                        </div>
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