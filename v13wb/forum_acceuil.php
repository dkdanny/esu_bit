<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 14/08/2018
 * Time: 16:31
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

        <title>Forum</title>

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
        <div class="container">
            <h1>bienvenue</h1>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <p class="text-justify">
                         Vous êtes la bienvenue sur notre forum. vous avez une préoccupation? n'attendez plus inscrivez votrre question votre question un peux plus
                        bas
                    </p>
                    <hr>
                    <?php include_once 'champ_d_question.php'?>
                </div>
                <?php include_once 'forum_widgets.php';?>
            </div>
        </div>
        </div>
        <!-- /.row -->

        <!-- /.container -->
        <script src="js/main.js"></script>
    </body>

    <!-- Footer -->
    <?php include_once 'footer.php'?>
</html>


