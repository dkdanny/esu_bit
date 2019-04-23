<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 28/08/2018
 * Time: 10:53
 */
    if (!isset($_SESSION))
        session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/small-business.css" rel="stylesheet">
        <title>Toutes les bibliotheques</title>
    </head>
    <body>
        <?php
            include_once 'navigation.php';
            include_once '../Model/Bibliotheque.php';
            $_bi = new Bibliotheque();
            $consult=explode('4kaD1A6',$_GET['consult']);
            $_stock=$_bi->__repertoire_travaux($consult[0]/199620180512);
        ?>
        <!-- Page Content -->
        <div class="container">
            <!-- Call to Action Well -->
            <div class="card text-white bg-secondary my-2 text-center">
                <div class="card-body">
                    <h4 class="text-white m-0"> Bienvenue</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Domaine</th>
                            <th scope="col">Résumer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($_stock as $_stocker):?>
                            <tr>
                                <td scope="col">
                                    <a target="blank" href="upload/<?php echo $_stocker['nom_fichier'];?>">
                                        <?php echo $_stocker['titreTrav'];?>
                                    </a>
                                </td>
                                <td scope="col"> <?=$_stocker['domaine']?></td>
                                <td scope="col"> <?=$_stocker['trav_resumer']?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    <!-- Footer -->
    <?php include_once 'footer.php';?>
</html>