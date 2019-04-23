<?php session_start();?>

<link href="vendor/bootstrap/css/bootstrap.min.css " rel="stylesheet" id="bootstrap-css">
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="vendor/bootstrap/css/bootstrap.min.css " rel="stylesheet" id="bootstrap-css">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--======================================================s=========================================-->
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



        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

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

        <title>S'inscrire</title>
    </head>
    <body>
        <?php include_once 'navigation.php';?>
        <br>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('img/bac.png');">
                <div class="wrap-login100">
                    <div class="login100-form validate-form">
                        <span class="login100-form-title p-b-34 p-t-2">
                            INSCRIPTION
                        </span>

                        <?php if (isset($_SESSION['mdp_incompatible'])):?>
                        <center>
                            <div class="alert alert-danger">
                                <?php echo  $_SESSION['mdp_incompatible'] ?>
                            </div>
                        </center>
                            <?php unset($_SESSION['mdp_incompatible']); endif;?>

                        <?php if (isset($_SESSION['champs_vide'])):?>
                            <center>
                                <div class="alert alert-danger">
                                    <?php echo  $_SESSION['champs_vide'] ?>
                                </div>
                            </center>
                            <?php unset($_SESSION['champs_vide']); endif;?>

                        <?php if (isset($_SESSION['nbr_carractere'])):?>
                            <center>
                                <div class="alert alert-danger">
                                    <?php echo  $_SESSION['nbr_carractere'] ?>
                                </div>
                            </center>
                            <?php unset($_SESSION['nbr_carractere']); endif;?>

                        <form class="form-horizontal" method="post" action="../Controler/c_inscription.php">

                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                <input class="input100" type="text" name="nom" placeholder="Nom">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Entrer votre email">
                                <input class="input100" type="email" name="email" placeholder="Adresse électronique">
                                <span class="focus-input100" data-placeholder="&#x2709;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                <input class="input100" type="text" name="username" placeholder="Nom d'utilisateur">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="password" placeholder="Mot de passeMot de passe">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="re_password" placeholder="Confirmer mot de passe">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" type="submit">
                                    Je m'inscris
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="assets/js/bootstrap.js"></script>

        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
    <?php include_once 'footer.php';?>
</html>