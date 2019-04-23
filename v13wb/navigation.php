<?php
    if (!isset($_SESSION))
        {
            session_start();
        }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <!--Logo du site bitabu et la sa couleur #f6a802-->
        <nav class="navbar navbar bg">
            <a class="navbar-brand" href="#">
                <img src="img_du_site/logo/test/logo_bitabu21.png" width="60" height="60" alt="">
            </a>
        </nav>
        <!--End Logo-->
        <!--bouton menu responsive-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            Menu
        </button>
        <!--End bouton menu-->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="acceuil.php">Acceuil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <?php if(isset($_SESSION['id_c'])):?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Espace bibliotheque
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="bibliotheque.php">Bibliotheque</a>
                            <a class="dropdown-item" href="loginAdmin.php">Administration</a>
                            <a class="dropdown-item" href="bibliotheque_ceer_espace.php">Créer epace</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forum_acceuil.php">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="deconnexion.php">Deconnexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link red" >| <?=$_SESSION['username'];?></a>
                    </li>
                <?php endif;?>
                <?php if(!isset($_SESSION['id_c'])):?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Espace bibliotheque
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="bibliotheque.php">Bibliotheque</a>
                            <a class="dropdown-item" href="loginAdmin.php">Administration</a>
                            <a class="dropdown-item" href="bibliotheque_ceer_espace.php">
                                Créer epace
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">

                    <li class="nav-item">
                        <a class="nav-link" href="forum_acceuil.php">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connecter.php">Se connecter</a>
                    </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>

<br/><br/><br/>

