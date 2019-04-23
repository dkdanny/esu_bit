<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenur dans bitabu</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

  </head>

  <body>

        <div class="overlay"></div>

            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="mp4/bg.mp4" type="video/mp4">
            </video>

        <div class="masthead">
            <div class="masthead-bg"></div>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 my-auto">
                        <div class="masthead-content text-white py-5 py-md-0">
                            <h1 class="mb-3">243bitabu</h1>
                            <!-- Message sur la page d'acceuil: inscription a reussit-->
                            <?php if (isset($_SESSION['inscription_ok'])):?>
                                <p class="mb-5">
                                    <?php echo  $_SESSION['inscription_ok'] ?>
                                </p>
                            <?php endif;?>
                            <?php if (!isset($_SESSION['inscription_ok'])):?>
                                <p class="mb-5">
                                    Vous êtes le bienvenue sur cette bibliothèque. Nous accompagnons partout dans vos recherche.
                                    <strong>
                                        <?=date("Y-m-d");?>
                                    </strong>
                                </p>
                                <p>Vous avez la possibilité de créer votre bibiothèue à condition que vous vous inscrivez. Bonne chance pour a suite!</p>
                            <?php  endif;?>

                            <?php unset($_SESSION['inscription_ok']);?>

                            <!-- Message sur la page d'acceuil dans le cas ou l'authentification a reussit-->

                            <?php if (isset($_SESSION['connexion_reussi'])):?>
                                <p class="mb-5">
                                    <?php echo  $_SESSION['connexion_reussi'] ?>
                                </p>
                            <?php endif;?>

                            <!-- Message sur la page d'acceuil dans le cas ou la publication du travail a reussit-->

                            <?php if (isset($_SESSION['publication_ok'])):?>
                                <p class="mb-5">
                                    <?php echo  $_SESSION['publication_ok'] ?>
                                </p>
                            <?php endif;?>

                            <?php unset($_SESSION['publication_ok']);?>

                          <form method="POST" action="reponse.php">

                              <div class="input-group input-group-newsletter">
                                  <input required type="text" class="form-control" name="recherche" placeholder="Recherche" aria-label="Entre la recherche" aria-describedby="basic-addon">
                              <div class="input-group-append">
                                  <button class="btn btn-secondary" type="submit"  id="recherche">
                                      <i class="fa fa-search"></i>
                                  </button>
                              </div>

                          </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="social-icons">

      <ul class="list-unstyled text-center mb-0">

            <li class="list-unstyled-item">
              <a href="connecter.php">
                <i class="fa fa-sign-in" title="Se connecter"></i>
              </a>
            </li>

            <li class="list-unstyled-item">
              <a href="inscription.php">
                <i class="fa fa-user-plus" title="S'incire"></i>
              </a>
            </li>

          <li class="list-unstyled-item">
              <a href="loginAdmin.php">
                  <i class="fa fa-university" title="Administration"></i>
              </a>
          </li>

          <li class="list-unstyled-item">
              <a href="forum_acceuil.php">
                  <i class="fa fa-wechat" title="Une Question"></i>
              </a>
          </li>

      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

  </body>

</html>
