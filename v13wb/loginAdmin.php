<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 13/08/2018
 * Time: 11:25
 */

session_start();
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">
            <!--===============================================================================================-->


            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- Bootstrap core CSS -->
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="css/small-business.css" rel="stylesheet">

        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <style >
            /*
    /* Created by Filipe Pina
     * Specific styles of signin, register, component
     */
            /*
             * General styles
             */

            body, html{
                height: 100%;
                background-repeat: no-repeat;
                background-color: #d3d3d3;
                font-family: 'Oxygen', sans-serif;
            }

            .main{
                margin-top: 70px;
            }

            h1.title {
                font-size: 50px;
                font-family: 'Passion One', cursive;
                font-weight: 400;
            }

            hr{
                width: 10%;
                color: #fff;
            }

            .form-group{
                margin-bottom: 15px;
            }

            label{
                margin-bottom: 15px;
            }

            input,
            input::-webkit-input-placeholder {
                font-size: 11px;
                padding-top: 3px;
            }

            .main-login{
                background-color: #fff;
                /* shadows and rounded borders */
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

            }

            .main-center{
                margin-top: 30px;
                margin: 0 auto;
                max-width: 330px;
                padding: 40px 40px;

            }

            .login-button{
                margin-top: 5px;
            }

            .login-register{
                font-size: 11px;
                text-align: center;
            }

        </style>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Connexion Admin</title>
    </head>
    <body>
        <?php include_once 'navigation.php';?>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('img/bac.png');">
                <div class="wrap-login100">
                    <span class="login100-form-title p-b-34 p-t-2">
                        ADMIN
                    </span>

                    <?php if (isset($_SESSION['champs_vide'])):?>
                        <center >
                            <div class="alert alert-danger">
                                <?php echo  $_SESSION['champs_vide'] ?>
                            </div>
                        </center>
                        <?php unset($_SESSION['champs_vide']); endif;?>

                    <?php if (isset($_SESSION['non_connecter'])):?>
                        <center>
                            <div class="alert alert-danger">
                                <?php echo  $_SESSION['non_connecter'] ?>
                            </div>
                        </center>
                        <?php unset($_SESSION['non_connecter']); endif;?>

                    <form class="form-horizontal" method="post" action="../Controler/c_biblioteque.php">
                        <div class="wrap-input100 validate-input" data-validate="Entrer votre admin">
                            <input class="input100" type="text" name="admin" id="admin" placeholder="Votre admin" value=<?php if(isset($admin)){echo $admin;} ?>>
                            <span class="focus-input100" data-placeholder="&#x2709;"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="pass" placeholder="Mot de passe">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                Je me connecte
                            </button>
                        </div>
                        <div class="login-register">
                            <a href="##.php">Creer espace</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
