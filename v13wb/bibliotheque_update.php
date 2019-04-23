<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 28/08/2018
 * Time: 11:14
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
            include_once 'navigation.php';
        ?>
        <!-- Page Content -->
        <div class="container-fluid">
            <!-- Search Widget -->
            <!--Panel-->
            <div class="card text-center">
                <div class="card-header">
                    <!--Tabs-->
                    <ul class="nav justify-content-end">
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
                            <div class="input-group-append col-3">
                                <a href="bibliotheque_acceuil.php" class="btn btn-primary">
                                    Options
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="input-group-append col-3">
                                <a href="deconnexion.php" class="btn btn-primary">
                                    Deconnexion
                                </a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <div class="input-group-append">
                                <a></a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div>
                                <h5 class="text-info">
                                    Bibliothèque <?=$_SESSION['nom_biblio'];?>
                                </h5>
                            </div>
                        </li>

                    </ul>
                    <!--/.Tabs-->
                </div>
                <br/>
                <?php include_once 'bibliotheque_notification.php';?>
                    <!--/.Panel-->
                <div class="col-sm-7">
                    <div class="card my-4">
                        <div class="col-lg-12">
                            <div class="wrap-login100">
                                <div class="login100-form validate-form my-3">
                                    <span class="login100-form-title p-b-34 p-t-2 my-3">
                                        <?php if (isset($_SESSION['erreur_update'])) :?>
                                        <p class="alert alert-danger text-center">
                                            <?php echo $_SESSION['erreur_update'];?>
                                        </p>
                                            <?php unset($_SESSION['erreur_update']); endif;?>
                                    </span>
                                    <p class="h4 mb-4">Modification</p>
                                    <p>Faites attention n'oubliez d'uploader votre fichier pdf</p>
                                    <!-- Default form subscription -->
                                    <form enctype="multipart/form-data" class="text-center border border-light p-5" method="post" action="../Controler/c_biblio_update_info.php">
                                        <input type="hidden" name="id" value="<?php echo $_GET['champ']?>">
                                        <input type="text" class="form-control mb-4" name="titreT" placeholder="Titre ou sujet du travail" aria-label="Entrer le titre du travail"">
                                        <input type="text" class="form-control mb-4" name="domT" placeholder="Domaine de publication" aria-label="">
                                        <input formenctype="multipart/form-data"  class="form-control-file mb-4" type="file" name="file">
                                        <input type="date" class="form-control mb-4" name="annee" placeholder="Année de publication" aria-label="Entre la recherche"">
                                        <div class="form-group">
                                            <textarea type="text" class="form-control rounded-0" name="resumerT" placeholder="Resumer du travail" rows="3" ></textarea>
                                        </div>
                                        <div class=" col-sm-12 ">
                                            <button class="btn btn-primary btn-lg" type="submit"  id="recherche">Modifier</button>
                                        </div>
                                    </form>
                                    <!-- Default form subscription -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Panel-->
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



