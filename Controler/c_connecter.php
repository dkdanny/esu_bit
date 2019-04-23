<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 07/08/2018
 * Time: 11:34
 */
session_start();

require_once '../Model/Chercheurs.php';

if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $_person = new Chercheurs();
        $_person->setEmail($_POST['email']);
        $_person->setPassword($_POST['password']);

        $_stock = $_person->connexion($_POST['email'],$_POST['password']);
        if (is_array($_stock))
        {
            $_SESSION['id_c'] = $_stock['id_abonne'];
            $_SESSION['username'] = $_stock['username'];
            $_SESSION['email'] = $_stock['email'];
            header('location: ../v13wb/acceuil.php');
        }
        else
        {
            $_SESSION['non_connecter'] = 'Adresse ou mot de passe incorrecte';
            header('location: ../v13wb/connecter.php');
        }
    }
    else
    {
        echo $_SESSION['champs_vide']='Les champs sont vides';
        header('Location: ../v13wb/connecter.php');
    }