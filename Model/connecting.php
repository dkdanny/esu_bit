
<?php
/**
 * Created by PhpStorm.
 * User: Hendricksen
 * Date: 03/08/2018
 * Time: 16:45
 */

class Connecting
{
    /**
     * @return PDO
     */
    public static function getConnexion()
    {
    
        try {
            $host = 'mysql:host=localhost;dbname=bitabu';
            $user = 'root';
            $pwd = '';
            $pdo = new PDO($host, $user, $pwd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT => true));
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

        return $pdo;
    }
}
