<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 21/08/2018
 * Time: 15:45
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->

        <title>Ajout des travaux</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/blog-post.css" rel="stylesheet">
    </head>

<body>
    <?php
        //Navigation
        include_once 'navigation.php';
    ?>
    <!-- Page Content -->
    <div class="container-fluid">
        <!-- Search Widget -->

            <!--Panel-->
            <div class="card text-center">
                <div class="card-header">
                    <!--Tabs-->

                    <ul class="nav nav-pills card-header-pills">

                        <li class="nav-item">
                            <form method="post" action="##.php">
                                <div class="input-group input-group-newsletter">
                                    <input required type="text" class="form-control" name="recherche" placeholder="Recherche" aria-label="Entre la recherche" aria-describedby="basic-addon">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"  id="recherche">Recherche</button>
                                    </div>
                            </form>
                        </li>

                        <li class="nav-item ">
                            <form method="post" action="##.php">
                                <div class="input-group-append col-3">
                                    <a href="bibliotheque_acceuil.php" class="btn btn-primary" >Options</a>
                                </div>
                            </form>
                        </li>

                        <li class="nav-item">
                            <form method="post" action="##.php">
                                <div class="input-group-append col-xl-3">
                                    <button href="biblio_modiff_travail" class="btn btn-primary" type="submit"  id="recherche">Modifier</button>
                                </div>
                            </form>
                        </li>

                    </ul>
                    <!--/.Tabs-->
                </div>
                <div class="card-body">
                    <!--/.Panel-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">

                                <div class="wrap-login100">
                                    <div class="login100-form validate-form">
                                        <span class="login100-form-title p-b-34 p-t-2">
                                            PUBLICATION DES TRAVAUX
                                        </span>
                                        <?php if (isset($_SESSION['publication_ok'])) :?>
                                        <p class=" alert alert-dark text-center"><?php echo $_SESSION['publication_ok'];?>
                                            <?php unset($_SESSION['publication_ok']); endif;?>

                                            <?php if (isset($_SESSION['erreur_publication'])) :?>
                                        <p class="alert alert-danger text-center"><?php echo $_SESSION['erreur_publication'];?>
                                            <?php unset($_SESSION['erreur_publication']); endif;?>

                                        <form  enctype="multipart/form-data" class="form-horizontal" method="post" action="Controler/c_publierTrav.php">

                                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                                <input class="input100" type="text" name="titreT" placeholder="Nom">
                                                <span class="focus-input100" data-placeholder=""></span>
                                            </div>

                                            <div class="wrap-input100 validate-input" data-validate="Entrer votre email">
                                                <input class="input100" type="file" name="file" formenctype="multipart/form-data" placeholder="Charger votre fichier">
                                                <span class="focus-input100" data-placeholder=""></span>
                                            </div>

                                            <div class="wrap-input100 validate-input" data-validate = "domaine">
                                                <input class="input100" type="text" name="domT" placeholder="Domaine de publication">
                                                <span class="focus-input100" data-placeholder=""></span>
                                            </div>

                                            <div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="descriptionT" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="container-login100-form-btn">
                                                <button class="login100-form-btn" type="submit">
                                                    Publier
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="js/map-custom.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

    <!-- /.container -->
    </body>

    <!-- Footer -->
    <?= include_once 'footer.php'?>
</html>
