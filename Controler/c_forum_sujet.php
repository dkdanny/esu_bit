<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 11/08/2018
 * Time: 12:08
 */
session_start();

if (isset($_POST['sujet']) && !empty($_POST['sujet']));
{
    include_once '../Model/Abonne.php';

    $_ab = new Abonne();

    $_ab->setSujet($_POST['sujet']);
    $_ab->setIdAbonne($_SESSION['id_c']);

    $id=$_ab->__forumSujets();
    header('Location: ../v13wb/forum.php?forum='.($id*199620182114).'24dhP9z'.uniqid());
}


