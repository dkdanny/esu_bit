<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 26/02/2019
 * Time: 17:38
 */

session_start();

if (isset($_POST['commenter'],$_POST['titreTrav']) && !empty($_POST['commenter']) && !empty($_POST['titreTrav']))
{
    require '../Model/Abonne.php';
    $_user = new Abonne();
    $_user->setIdAbonne($_SESSION['id_c']);
    $_user->setCommentaireLivre($_POST['commenter']);
    $_user->setIdLivre($_POST['titreTrav']);

    $_save = $_user->__commenter_livre();

    $_SESSION['commenter'] = 'bien commenter';
    header('Location: ../v13wb/lecture_info.php?resultat='.($_user->getIdLivre()*2019200322).'2sD6c6'.uniqid());
}
else
{
    header('location: ../v13wb/lecture_info.php');
    $_SESSION['erreur'] = 'votre commentaire est nul';

}
