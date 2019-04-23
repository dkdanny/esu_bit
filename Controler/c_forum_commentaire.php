<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 14/08/2018
 * Time: 10:34
 */
session_start();

if (isset($_POST['comment']) && !empty($_POST['comment']));
{
    include_once '../Model/Abonne.php';
    $_ab = new Abonne();

    $_ab->setCommentaire($_POST['comment']);
    $_ab->setIdSuj($_POST['id_suj']);
    $_ab->setIdAbonne($_SESSION['id_c']);

    $_stockAllCom=$_ab->__forumComments();

    header('Location: ../v13wb/forum.php?forum='.($_ab->getIdSuj()*199620182114).'24dhP9z'.uniqid());
}
