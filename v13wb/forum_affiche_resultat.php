<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Forum</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/blog-post.css" rel="stylesheet">
    </head>
<body>
 <?php
    include_once 'navigation.php';
    include_once '../Model/Abonne.php';
    $_ab = new Abonne();
    $_res = $_ab->__forumRechercheSujet($_POST['recherche']);
 ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Affichage titre du sujet -->
                <?php foreach ($_res as $_result):?>
                    <div>
                        <h4 class="mt-1" >
                            <a href="forum.php?forum=<?php echo ($_result['id']*199620182114).'24dhP9z'.uniqid()?>?>">
                                <?php echo $_result['sujet']?>
                            </a>
                        </h4>
                    </div>
                    <hr>
                <?php endforeach ;?>
            </div>
            <!-- Sidebar Widgets Column -->
            <?php include_once 'forum_widgets.php';?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include_once 'footer.php';?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
