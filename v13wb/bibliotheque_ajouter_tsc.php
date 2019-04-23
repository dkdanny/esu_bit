<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 22/08/2018
 * Time: 22:57
 */
session_start();
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

        <title>Gestion de la biblothèque</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/blog-post.css" rel="stylesheet">
    </head>
    <body>
    <?php
        //Navigation
        require_once 'navigation.php';
    ?>
    <!-- Page Content -->
    <div class="container-fluid">
        <!--Panel-->
        <div class="card text-center">
            <div class="col-sm-2">
            </div>
            <?php include_once 'bibliotheque_notification.php';?>
            <div class="col-sm-7">
                <div class="card my-4">
                    <div class="col-lg-12">
                        <div class="wrap-login100">
                            <div class="login100-form validate-form my-3">
                                <span class="login100-form-title p-b-34 p-t-2 my-3">
                                        <?php if (isset($_SESSION['publication_ok'])) :?>
                                            <p class=" alert alert-dark text-center">
                                                <?= $_SESSION['publication_ok'];?>
                                             </p>
                                        <?php unset($_SESSION['publication_ok']); endif;?>
                                        <?php if (isset($_SESSION['erreur_publication'])) :?>
                                            <p class="alert alert-danger text-center">
                                                <?= $_SESSION['erreur_publication'];?>
                                            </p>
                                        <?php unset($_SESSION['erreur_publication']); endif;?>
                                </span>
                                <p class="h4 mb-4">Ajouter</p>
                                <p>Faites attention n'oubliez d'uploader votre fichier pdf</p>

                                <!-- Default form subscription -->
                                <form enctype="multipart/form-data" class="text-center border border-light p-5" method="post" action="../Controler/c_publierTrav.php">

                                    <!-- Sujet du travail -->
                                    <input type="text" class="form-control mb-4" name="titreT" placeholder="Titre ou sujet du travail" aria-label="Entrer le titre du travail"">

                                    <!-- Domaine de publication -->
                                    <input type="text" class="form-control mb-4" name="domT" placeholder="Domaine de publication" aria-label="Entre la recherche"">
                                    <select name="choix">
                                        <option value="choix1">Choix 1</option>
                                        <option value="choix2">Choix 2</option>
                                        <option value="choix3">Choix 3</option>
                                        <option value="choix4">Choix 4</option>
                                    </select>
                                    <!-- Uploader -->
                                    <input formenctype="multipart/form-data"  class="form-control-file mb-4" type="file" name="file">

                                    <!-- Annee de publication -->
                                    <input type="date" class="form-control mb-4" name="annee" placeholder="Année de publication" aria-label="Entre la recherche"">

                                    <!-- Message -->
                                    <div class="form-group">
                                        <textarea type="text" class="form-control rounded-0" name="resumerT" placeholder="Resumé du travail" rows="3" ></textarea>
                                    </div>

                                    <div class=" col-sm-12 ">
                                        <button class="btn btn-primary btn-lg" type="submit"  id="recherche">
                                            Ajouter
                                        </button>
                                    </div>

                                </form>
                                <!-- Default form subscription -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!--/.Panel-->
            <div class="col-sm-1">
            </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.container -->
    </body>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
<!-- Footer -->
    <?php include_once 'footer.php'?>
</html>



