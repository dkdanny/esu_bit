<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bitabu', 'root', '');

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
