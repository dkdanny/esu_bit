<?php
    session_start();
if (isset($_POST['titreT'],$_FILES['file'], $_POST['domT'], $_POST['resumerT'], $_POST['annee'])
    && !empty($_POST['titreT']) && !empty($_FILES['file'])  && !empty($_POST['domT']) && !empty($_POST['resumerT']) && !empty($_POST['annee']))
{
    include_once '../Model/Livre.php';
    $_travail = new Livre();

    //insert lextetion du fichier
    $array = explode('.', $_FILES['file']['name']);
    $extension = end($array);

    $_travail->setId($_POST['id']);
    $_travail->setTitre($_POST['titreT']);
    $_travail->setTypeFile($extension);
    $_travail->setDomaine($_POST['domT']);
    $_travail->setDatePublication('annee');
    $_travail->setResumerTrav($_POST['resumerT']);

    //oploader le fichier
    if(move_uploaded_file($_FILES['file']['tmp_name'], '../upload/'.$_FILES['file']['name']))
    {

    }

    $_travail->__update();

    $_SESSION['update_ok'] = 'Modification reussit';
    header('location: ../v13wb/biblio_modif_travail.php');
}else
{
    $_SESSION['erreur_update'] = 'Non modifier';
    header('location: ../v13wb/bibliotheque_update.php');
}