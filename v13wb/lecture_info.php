<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 06/02/2019
 * Time: 00:12
 */
session_start(); ?>

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
        <title>Ubitabu | lecture</title>
    </head>

    <body>
        <?php
        /*Barre de navigation*/
        require 'navigation.php';
        /* inclusion de la classe Livre*/
        require ('../Model/Livre.php');
        /*Inclusion de la classe Bibliotheque*/
        require ('../Model/Bibliotheque.php');
        /*Inclusion de la classe Abonne*/
        require ('../Model/Abonne.php');

        if(isset($_POST['recherche'])) $results = $livre->__listerOuvrageParRecherche($_data[0]/2019200322);

        $livre = new Livre();
        $_data = explode('2sD6c6', $_GET['resultat']);
        //var_dump($_data[0]);
        $_travail = $livre->__read_resultats($_data[0]/2019200322);
       // var_dump($_data[0]/2019200322);

        //$bib = new Bibliotheque();
        //$_univ = explode('2ssD%c6', $_GET['resultat']);
        //$_save = $bib->__ajouter_par($_univ[0]/2019200322);

        $_ab = new Abonne();
        $_membre = explode('2sD6c6', $_GET['resultat']);
        $_user = $_ab->__read_comment_livre($_data[0]/2019200322);

        ?>
        <!-- Le champ d'insersion des mots cles de la recherche ou des mots cles de la recherche suivi du boutton recherche -->
        <div class="masthead-danger">
            <div class="container h-100 ">
                <div class="row h-100">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="masthead-content text-white py-5 py-md-3 ">
                            <form method="POST" action="reponse.php">
                                <div class="input-group input-group-newsletter">
                                    <input required type="text" class="form-control" name="recherche" placeholder="Recherche sur universal bitabu" aria-label="Entre la recherche" aria-describedby="basic-addon">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-warning" type="submit"  id="recherche">Recherche</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="mt-4">
                <?php echo $_travail['titreTrav'];?>
            </h1>
            <div class="row" align="center">
                <div class="col-md-8">
                    <table>
                        <tr>
                            <td>
                                <iframe src="upload/<?= $_travail['nom_fichier']; ?>" width="300" height="200">
                                </iframe>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <span class="login100-form-title p-b-34 p-t-2 my-3">
                <?php if (isset($_SESSION['commenter'])) :?>
                    <p class=" alert alert-success text-center">
                        <?= $_SESSION['commenter'];?>
                    </p>
                <?php unset($_SESSION['commenter']); endif;?>

                <?php if (isset($_SESSION['erreur'])) :?>
                    <p class="alert alert-danger text-center">
                        <?= $_SESSION['erreur'];?>
                    </p>
                <?php unset($_SESSION['erreur']); endif;?>
            </span>

            <div class="card-body">
                <?php foreach ($_user as $_users): ?>

                    <div class="form-group">
                        <p class="list-group-item list-group-item-warning">
                            <?= $_users['comment']; ?>
                        </p>
                    </div>
                    <cite title="Source Title">C'est </cite>
                        <?= $_ab->__quicomment($_users['id_abonne']) ?>
                    <hr>

                <?php endforeach; ?>

                <?php if (!isset($_SESSION['id_c'])): ?>
                    <div class="alert alert-danger">Seul les membres commentent</>
                <?php endif; ?>

                <?php if (isset($_SESSION['id_c'])): ?>

                <form method="post" action="../Controler/c_comment_livre.php">
                    <input type="hidden" name="titreTrav" value="<?= $_data[0]/2019200322; ?>"/>
                    <div class="form-group">
                        <textarea class="form-control" name="commenter" placeholder="Votre commentaire"></textarea>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"  id="Envoyer">Commenter</button>
                    </div>
                </form>

            <?php endif; ?>
        </div>
        </div>




        <!-- javaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>


<?php
/*footer*/
include_once 'footer.php';
?>

</html>
