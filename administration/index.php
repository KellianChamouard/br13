<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('inc/head.php')?>
        <title>Administration -</title>
    </head>
    <body>
        <?php include('inc/header.php')?>

        <?php include('../database/database.php')?>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">

                    <div class="card bg-light mb-3" style="min-height: 350px; max-height: 350px;">
                        <div class="card-header">🏉 Belvèze Razes MJC XIII</div>
                        <div class="card-body overflow-auto">
                            <h5 class="card-title">Bienvenu(e) sur l'administration du site internet du club.</h5>
                            <p class="card-text">Vous trouverez ici toutes les infos concernant le club, la
                                possibilité d'ajouter des articles, les résultats ainsi que tenir à jour le
                                calendrier. Vous trouverez aussi, toutes les informations relatives au trafic
                                sur le site.
                            </p>
                            <p class="card-text">Vous pouvez consulter la prise en main générale de l'Administration
                                <b>
                                    <a href="priseenmainbo.php" class="blacktxt">Ici</a>
                                </b>.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 p5">

                    <div class="card bg-light mb-3" style="min-height: 350px; max-height: 350px;">
                        <div class="card-header">📝 Notes
                            <div class="float-right">
                                <button
                                    type="button"
                                    class="btn btn-success btn-sm"
                                    data-toggle="modal"
                                    data-target="#exampleModal">
                                    Ajouter une note
                                </button>
                            </div>
                        </div>
                        <?php include('modal.php');?>
                        <div class="card-body overflow-auto">

                        <?php include('../database/recupnote.php');?>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">

                    <div class="card bg-light mb-3" style="min-height: 350px; max-height: 350px;">
                        <div class="card-header">📈 Trafic du site</div>
                        <div class="card-body">
                            <p class="card-text">Vous devez installer le service d'analyses de trafic de Google.
                            </p>
                            <p>
                                <b>
                                    <a href="https://analytics.google.com/" class="blacktxt">Installer Google Analytics</a>
                                </b>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">
                
                <?php include('../database/recupsocial.php');?>

                    <div class="card bg-light mb-3" style="min-height: 350px; max-height: 350px;">
                        <div class="card-header">👨‍👩‍👦 Réseaux Sociaux</div>
                        <div class="card-body">
                            <p>
                                <form action="../database/addsocial.php" method="post">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><img src="./img/insta.png" style="width:15px; height:15px;"></span>
                                        </div>
                                        <input 
                                            name="url_insta"
                                            type="text"
                                            class="form-control"
                                            value="<?php echo $datap['url_social'];?>"
                                            aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>

                                </p>
                                <p>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><img src="./img/fb.png" style="width:15px; height:15px;"></span>
                                        </div>
                                        <input
                                            name="url_fb"
                                            type="text"
                                            class="form-control"
                                            value="<?php echo $datas['url_social'];?>"
                                            aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>

                                </p>
                                <p>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><img src="./img/yt.png" style="width:15px; height:15px;"></span>
                                        </div>
                                        <input
                                            name="url_yt"
                                            type="text"
                                            class="form-control"
                                            value="<?php echo $datat['url_social'];?>"
                                            aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>

                                </p>
                                <p>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><img src="./img/twitter.png" style="width:15px; height:15px;"></span>
                                        </div>
                                        <input
                                            name="url_twitter"
                                            type="text"
                                            class="form-control"
                                            value="<?php echo $dataq['url_social'];?>"
                                            aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-sm">Enregistrer</button>
                                </form>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p5">

                    <div class="card bg-light mb-3" style="min-height: 350px; max-height: 350px;">
                        <div class="card-header">ℹ️ Informations</div>
                        <div class="card-body">
                        <p class="card-title">
                        <h5><span class="badge badge-dark">📧<a href="mailto:contact@kellian-chamouard.fr?subject=Contact du Site internet de BRXIII">Mail</a></span></h5>
                        <h5><span class="badge badge-dark">☎<a href="tel:0778907411">Téléphone</a></span></h5>
                        </p>
                            <p class="card-title">&copy; RugbyShareCMS - Un CMS adapté pour la gestion des
                                sites internets des équipes de rugby.</p>
                            <p class="card-text">v1.0.0
                                <span class="badge badge-warning">Bêta</span></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/js.js"></script>
    </body>
</html>