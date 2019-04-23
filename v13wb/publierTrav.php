<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 08/08/2018
 * Time: 13:20
 */

    session_start();

include_once 'navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Publcation des travaux</title>
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
    </head>
    <body>

        <br/>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('img/bac.png');">
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

                            <div class="wrap-input100 validate-input" data-validate="Uploder">
                                <input class="input100" type="file" name="file" formenctype="multipart/form-data" placeholder="Charger votre fichier">
                                <span class="focus-input100" data-placeholder=""></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "domaine">
                                <input class="input100" type="text" name="domT" placeholder="Domaine de publication">
                                <span class="focus-input100" data-placeholder=""></span>
                            </div>

                            <div>
                                <div class="form-group">
                                    <textarea class="form-control" name="resumerT" placeholder="Résumés du travail" rows="3"></textarea>
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
        <div id="dropDownSelect1"></div>

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



    </body>
</html>

