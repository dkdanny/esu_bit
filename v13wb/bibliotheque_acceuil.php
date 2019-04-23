<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 23/08/2018
 * Time: 08:37
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
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
                                <a href="deconnexion.php" class="btn btn-primary" >Deconnexion</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="input-group-append col-3">
                                <a></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div>
                                <h5 class="text-info"> Bibliothèque <?=$_SESSION['nom_biblio'];?></h5>
                            </div>
                        </li>
                    </ul>

                </div>

                    <div class="row">
                        <!--Panel-->
                        <div class="col-sm-3">
                        </div>

                        <!--Panel des boutons pour differentes options-->
                        <div class="col-sm-6">
                            <div class="card my-4">
                                <div class="col-sm-12 my-5">
                                    <div class=" list-group-item ">
                                        <a href="bibliotheque_repertoire.php" class="btn btn-primary btn-lg btn-block">
                                            Toutes vos publications
                                        </a>
                                    </div>
                                    <div class="list-group-item ">
                                        <a href="bibliotheque_ajouter_tsc.php" class="btn btn-primary btn-lg btn-block">
                                            Ajouter des travaux
                                        </a>
                                    </div>
                                    <div class="list-group-item ">
                                        <a href="biblio_modif_travail.php" class="btn btn-primary btn-lg btn-block">
                                            Modifier les informations sur vos publications
                                        </a>
                                    </div>
                                    <div class="list-group-item ">
                                        <a href="#" class="btn btn-primary btn-lg btn-block">
                                            Modifier votre mot de passe
                                        </a>
                                    </div>
                                    <div class="list-group-item ">
                                        <a href="#" class="btn btn-primary btn-lg btn-block">
                                            Créer les comptes des publications
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/.Panel-->
                        <div class="col-sm-3">
                        </div>
                        <!--/.Panel-->
                    </div>
                </div>
            </div>
        </div>

        <br/>

        <!-- /.row -->

    <!-- /.container -->
        <script src="js/main.js"></script>
    </body>

    <!-- Footer -->
    <?php include_once 'footer.php'?>
</html>




