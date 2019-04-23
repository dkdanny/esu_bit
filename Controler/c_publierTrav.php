<?php

session_start();

if (isset($_POST['titreT'],$_FILES['file'], $_POST['domT'], $_POST['resumerT'], $_POST['annee'])
    && !empty($_POST['titreT']) && !empty($_FILES['file'])  && !empty($_POST['domT']) && !empty($_POST['resumerT']) && !empty($_POST['annee']))
    {
        include_once '../Model/Bibliotheque.php';
        $_bibliotheque = new Bibliotheque();

        //insert lextetion du fichier

        $array = explode('.', $_FILES['file']['name']);
        $extension = end($array);

        $_bibliotheque->setSujetTrav($_POST['titreT']);
        $_bibliotheque->setTypeFile($extension);
        $_bibliotheque->setDomaineTrav($_POST['domT']);
        $_bibliotheque->setResumerTrav($_POST['resumerT']);
        $_bibliotheque->setDatePublication($_POST['annee']);
        $_bibliotheque->setIdBib($_SESSION['id_bib']);

        //oploader le fichier
        if(move_uploaded_file($_FILES['file']['tmp_name'], '../upload/'.$_FILES['file']['name']))
        {

        }
        $_bibliotheque->__ajouter_travail();

        $_SESSION['publication_ok'] = 'Le travail a été ajouté';
        header('location: ../v13wb/bibliotheque_ajouter_tsc.php');
    }
else
    {
        $_SESSION['erreur_publication'] = 'Vous avez mal rempli les champs';
        header('location: ../v13wb/bibliotheque_ajouter_tsc.php');
    }