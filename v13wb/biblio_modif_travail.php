<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 21/08/2018
 * Time: 12:06
 */
    if (!isset($_SESSION))
    {
        session_start();
    }
    $_stocks=array();

    include_once 'navigation.php';
    include_once '../Model/Bibliotheque.php';
    $_bib = new Bibliotheque();
    $_stocks=$_bib->__repertoire_travaux($_SESSION['id_bib']);
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

        <title>Apporter modification</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/blog-post.css" rel="stylesheet">
    </head>

    <body>
    <!-- Page Content -->
    <div class="container-fluid">
        <!-- Search Widget -->

        <!--Panel-->
        <div class="card text-center">
            <div class="card-header ">

                <ul class="nav justify-content-end">

                    <li class="nav-item">
                        <div class="nav-item">

                            <?php if (isset($_SESSION['update_ok'])) :?>
                                <p class=" alert alert-dark text-center">
                                    <?php echo $_SESSION['update_ok'];?>
                                </p>
                            <?php unset($_SESSION['update_ok']); endif;?>
                        </div>
                    </li>

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
                            <a href="bibliotheque_acceuil.php" class="btn btn-primary">Options</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="input-group-append col-3">
                            <a href="deconnexion.php" class="btn btn-primary" >Deconnexion</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <div class="input-group-append">
                            <p></p>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div>
                            <h5 class="text-info"> Bibliothèque <?=$_SESSION['nom_biblio'];?></h5>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="card-body">
                <!--/.Panel-->
                <div class="container-fluid">
                    <div class="row">

                        <?php include_once 'bibliotheque_notification.php';?>

                        <div class="col-lg-9">

                            <!--Table-->

                            <form method="get" action="bibliotheque_update.php">
                                <table class="table table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Domaine</th>
                                            <th scope="col">Résumer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($_stocks as $_stocker):?>
                                            <tr>
                                                <th scope="row">
                                                    <input name="champ" value="<?= $_stocker['id'];?>" type="radio">
                                                </th>
                                                <td scope="col"> <?= $_stocker['titreTrav'];?></td>
                                                <td scope="col"> <?= $_stocker['domaine'];?></td>
                                                <td scope="col"> <?= $_stocker['trav_resumer'];?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item">
                                        <div class="input-group input-group-newsletter">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"  id="recherche">Modifier</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </form>

                        </div>

                    </div>
                </div>
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



