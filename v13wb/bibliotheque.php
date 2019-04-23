<?php
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
            $_stock=$_bi->__presenter_bib();
        ?>
        <!-- Page Content -->
        <div class="container">

            <!-- Call to Action Well -->
            <div class="card text-white bg-secondary my-2 text-center">
                <div class="card-body">
                    <h4 class="text-white m-0"> Les bibliotheques disponible</h4>
                </div>
            </div>
                <!-- Content Row -->
            <div class="row">
                <?php foreach ($_stock as $_stocker):?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100" >
                            <div class="card-body" style="background-image: url('logo/<?=$_stocker['logo'];?>')">
                                <h2 class="text-info" ><?=$_stocker['nom_bib'];?></h2>
                                <p class="card-text"><?=$_stocker['description']?></p>
                            </div>
                            <div class="card-footer list-group-item list-group-item-warning">
                                <a class="btn btn-primary" href="bibliotheque_consulter.php?consult=<?php echo($_stocker['id']*199620180512).'4kaD1A6'.uniqid()?>">
                                    Consulter
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    <!-- Footer -->
    <?php include_once 'footer.php';?>
</html>