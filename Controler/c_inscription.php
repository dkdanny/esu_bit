<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 07/08/2018
 * Time: 11:10
 */
session_start();

require_once '../Model/Chercheurs.php';

//On verifie si le formulaiire a ete envoyer
if (isset($_POST['nom'],
        $_POST['email'],
        $_POST['username'],
        $_POST['password'],
        $_POST['re_password'])

    && !empty($_POST['nom'])
    && !empty($_POST['email'])
    && !empty($_POST['username'])
    && !empty($_POST['password'])
    && !empty($_POST['re_password']))
    {
        //On instancie la clsse Chercheur
        $_person = new Chercheurs();

        $_person->setNom($_POST['nom']);
        $_person->setEmail($_POST['email']);
        $_person->setUsername($_POST['username']);
        $_person->setPassword($_POST['password']);
        $_person->setConfPassword($_POST['re_password']);

        //On verifie si le mot de passe et celui de la confirmation sont identiques
        if ($_POST['password'] == $_POST['re_password'])
        {
            //On verifie si le mot de passe a au moins 8 caracteres
            if (strlen($_POST['password']) >= 8)
            {
                $_stock = $_person->connexion($_POST[''],$_POST['']);
                if (is_array($_stock))
                {
                    $_SESSION['id_c'] = $_stock['id_abonne'];
                    $_SESSION['username'] = $_stock['username'];
                    $_SESSION['email'] = $_stock['email'];

                    header('Location: ../v13wb/acceuil.php');
                }
                else
                {
                    $_SESSION['info_existe'] = 'Ce nom d\'utiliateur est deja pris';
                    header('location: ../v13wb/inscription.php');
                }


               //on fait appel a la methode qui fait l'inscription et insert les informations dans la base des donnees
                //On cree une session inscription_ok pour afficher les message vous avez ete inscrit
                //Une autre session pour afficher le nom de l4utilisateur, pour l'email et un autre qui prendra toutes les informations
                $id_c=$_person->__inscrir();
                $_SESSION['inscription_ok'] = 'Vous avez ete inscrit.';
                $_SESSION['nom']=$_POST['nom'];
                $_SESSION['id_c']=$id_c;
                $_SESSION['email']=$_POST['email'];
                header('location: ../v13wb/connecter.php');
            }
            else
            {
                $_SESSION['nbr_carractere'] = 'Votre mot de passe doit avoir au moins 8 caracteres';
                header('Location: ../v13wb/inscription.php');
            }
        }
        else
        {
            $_SESSION['mdp_incompatible'] = 'Vos mot de passe ne correspondent pas.';
            header('Location: ../v13wb/inscription.php');
        }
    }
    else
    {
        $_SESSION['champs_vide']='Il y\'a des champs vides';
        header('Location: ../v13wb/inscription.php');
    }

