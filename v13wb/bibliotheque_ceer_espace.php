<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 07/09/2018
 * Time: 12:21
 */
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="vendor/bootstrap/css/bootstrap.min.css " rel="stylesheet" id="bootstrap-css">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Demande d'espace bibliotheque</title>

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
        <div class="container" >
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <p class="text-justify">
                       <p align="center">
                            Bienvenue sur 243bitabu
                        </p>
                            243bitabu est une plateforme qui vous permet de gerer vos bibliotheques en ligne.
                        <a href="mailto:danykaseba@gmail.com">
                         Envoyer nous vos coordonées a cette adresse!</a>
                    </p>
                    <br/><br/><br/><br/><br/><br/>
                    </p>
                    <hr>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </div>
        <!-- /.row -->
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <!-- /.container -->
        <script src="js/main.js"></script>
    </body>

    <!-- Footer -->
    <?php include_once 'footer.php'?>
</html>
