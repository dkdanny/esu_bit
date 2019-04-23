<?php
/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 08/08/2018
 * Time: 16:30
 */
if(!isset($_SESSION))
{
    session_start();
}
session_destroy();
header('Location: ../index.php');