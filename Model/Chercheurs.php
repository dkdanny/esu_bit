<?php

/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 06/08/2018
 * Time: 11:20
 */
class Chercheurs
{
    private $_id;
    private $_nom;
    private $_username;
    private $_email;
    private $_password;
    private $_confPassword;
    private $_con;

    public function __construct()
    {
        include_once 'connecting.php';
        $this->_con=Connecting::getConnexion();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }
    public function setPassword($password){
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getConfPassword()
    {
        return $this->_confPassword;
    }

    /**
     * @param mixed $confPassword
     */
    public function setConfPassword($confPassword)
    {
        $this->_confPassword = $confPassword;
    }

    /**
     * @param $email
     * @param $passs
     * @return mixed
     * cette fonction permet aux abonnees de se connecteer
     */
    public function connexion($email,$passs)
    {
        $q=$this->_con->prepare('SELECT * FROM liste_abonne WHERE email= :email AND password= :pass');
        $q->execute(array('email'=>$email,'pass'=>$passs));
        return $q->fetch();
    }

    /**
     * @return string
     */
    public function __inscrir()
    {
        $_donnee = $this->_con->prepare('INSERT INTO liste_abonne SET nom=?, username=?, email=?, password=?');
        $_donnee->execute(array($this->_nom, $this->_username, $this->_email, $this->_password));

    }

}



