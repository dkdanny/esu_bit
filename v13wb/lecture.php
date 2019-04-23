<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 30/08/2018
 * Time: 16:17
 */
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

    <title>recherche</title>

</head>

<body>
<?php
/*Barre de navigation*/
include_once'navigation.php';
include_once 'Model/Livre.php';

$livre = new Livre();

// $read = $livre->__lire_travail($_POST['read']);

?>
<div class="masthead-danger">
    <div class="container h-100 ">
        <div class="row h-100">
            <div class="col-3"></div>
            <div class="col-6 my-auto ">

                <div class="masthead-content text-white py-5 py-md-3 ">

                    <form method="POST" action="##.php">
                        <div class="input-group input-group-newsletter">
                            <input required type="text" class="form-control" name="recherche" placeholder="Recherche" aria-label="Entre la recherche" aria-describedby="basic-addon">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"  id="recherche">Recherche</button>
                            </div>
                    </form>

                </div>

            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="container">

    <!-- Project One -->
    <?php foreach ($results as $result):?>

        <div class="row">

            <div class="col-md-8">
                <h5>
                    <p href="upload/<?php echo $result['nom_fichier']?>" name="read" class="text-justify"></p>
                </h5>
            </div>

        </div>
        <!-- /.row -->

    <?php endforeach; ?>

    <!-- Pagination -->

    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Suivant</span>
            </a>
        </li>
    </ul>

</div>
<!-- /.container -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
<?php
/*footer*/
include_once 'footer.php';
?>

</html>
