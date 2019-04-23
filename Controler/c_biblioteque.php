<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 13/08/2018
 * Time: 11:48
 */
session_start();

if (isset($_POST['admin'], $_POST['pass']) && !empty($_POST['admin']) && !empty($_POST['pass']))
{
    include_once '../Model/Admin.php';
    $_ad = new Admin();
    $_ad->setAdministrateur($_POST['admin']);
    $_ad->setPassword($_POST['pass']);
    $_stock = $_ad->__connexionAdmin();
    if (is_array($_stock))
    {
        $_SESSION['id_bib']= $_stock['id'];
        $_SESSION['administrateur']=$_stock['adminbib'];
        $_SESSION['nom_biblio'] = $_stock['nom_bib'];
        header('Location: ../v13wb/bibliotheque_acceuil.php');
    }
    else
    {
        $_SESSION['non_connecter'] = 'Admin ou mot de passe incorrecte';
        header('Location: ../v13wb/loginAdmin.php');
    }
}
else
{
    $_SESSION['champs_vide']='Les champs sont vides';
    header('Location: ../v13wb/loginAdmin.php');
}

