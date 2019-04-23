<?php
    session_start();
?>

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
            require_once 'navigation.php';
            require_once '../Model/Forum.php';
            require_once '../Model/Abonne.php';

        //reccuperer les sujets
            $_for = new Forum();
            $_uniq = explode('24dhP9z', $_GET['forum']);
            $_req = $_for->__selectSujet($_uniq[0]/199620182114);
        //reccuperer les commentaires
            $_ab = new Abonne();
            $_perso = explode('24dhP9z', $_GET['forum']);
            $_stock = $_ab->__forumAllComment($_perso[0]/199620182114);
        ?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div  id="commentaires" class="col-lg-8">
                    <!-- Affichag titre du sujet -->
                    <h1 class="mt-4"><?= $_req['sujet'];?></h1>
                    <!-- Affiche l'auteur du sujet -->
                    <p class="lead">Posté par : <strong> <?= $_req['username']; ?> </strong></p>
                    <!-- commentaires-->
                    <div id="commentaires">
                        <!-- Affiche les commentaires et ses auteurs -->
                        <?php foreach ($_stock as $_stocker):?>

                            <blockquote class="blockquote">
                                <p class="list-group-item list-group-item-success"><?= $_stocker['commentaire']; ?></p>
                                <footer class="blockquote-footer">
                                    <cite title="Source Title">C'est </cite>
                                    <?php echo $_ab->__quicomment($_stocker['id_abonne']);?>
                                </footer>
                            </blockquote>
                            <hr>

                        <?php endforeach; ?>
                    </div>
                    <!-- Affichage du champ COMMENTAIRE si l'utilisateur est identifie-->
                    <?php if (isset($_SESSION['id_c'])):?>
                        <!-- Comments Form -->
                        <form method="post" action="../Controler/c_forum_commentaire.php">
                            <!-- ce champ caché reccupere le forum ou le sujet. ici remplacé par $_perso[0]/199620182114 -->
                            <input type="hidden" name="id_suj" value="<?php echo $_perso[0]/199620182114;?>"/>
                            <div class="card my-4">
                                <h5 class="list-group-item list-group-item-warning">ENVOYER VOTRE COMMENTAIRE :</h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea class="form-control" name="comment" rows="3"></textarea>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"  id="Envoyer">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <!-- Champs des questions -->
                        <?php require_once 'champ_d_question.php'?>
                    <?php endif; ?>
                </div>
                <!-- Sidebar Widgets Column -->
                <?php require_once 'forum_widgets.php';?>
            </div>
                <!-- /.row -->
        </div>
            <!-- /.container -->
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

    <!-- Footer -->
    <?php require_once 'footer.php';?>

</html>
