<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 21/08/2018
 * Time: 17:09
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="vendor/bootstrap/css/bootstrap.min.css " rel="stylesheet" id="bootstrap-css">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

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

        <title>modification</title>

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

    <div class="card text-center">
        <div class="card-header">
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

                <li class="nav-item">
                    <form method="post" action="##.php">
                        <div class="input-group-append col-3">
                            <button href="bibliotheque_acceuil.php" class="btn btn-primary" type="submit"  id="recherche">Options</button>
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
                            update
                        </span>

                                <form  enctype="multipart/form-data" class="form-horizontal" method="post" action="../Controler/c_biblio_update_info.php">

                                        <input type="hidden" name="id" value="<?php echo $_GET['champ']?>">

                                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                        <input class="input100" type="text" name="titreT" placeholder="Titre ou sujet du travail">
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
                                            <textarea class="form-control" name="resumerT" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn" type="submit">
                                            Enregistrer
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <?php //include_once 'bibliotheque_widgets.php';?>
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
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

<!-- /.container -->
</body>

<!-- Footer -->
<?php include_once 'footer.php'?>
</html>