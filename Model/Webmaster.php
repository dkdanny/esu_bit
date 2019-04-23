<?php

/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 02/11/2018
 * Time: 03:17
 *
 * cette classe contient differentes fonctionalités et droit que le WEBMASTER effectue sur 243bitabu
 */

class Webmaster
{
    private $_id;
    private $_admin;
    private $_pseudo;
    private $_pass;
    private $_phone;
    private $_email;
    private $_con;

    /**
     * Webmaster constructor.
     * @param $_id
     * @param $_admin
     * @param $_pseudo
     * @param $_pass
     * @param $_phone
     * @param $_email
     * @param $_con
     */
    public function __construct()
    {
        include_once 'connecting.php';
        $this->_con=Connecting::getConnexion();
    }

    public function connexion()
    {
        $_req = $this->_con->prepare('SELECT * FROM webmasters WHERE wb_admin=:, wb_pass =:');
        $_req->execute(array());
        return $_req->fetch();
    }

    public function new_webmaster()
    {
        $_req = $this->_con->prepare('INSERT INTO webmasters SET (wb_pseudo, wb_admin, wb_pass, wb_phone, wb_email)');
        $_req->execute(array($this->_pseudo, $this->_admin, $this->_pass, $this->_phone, $this->_email));
    }

    public function create_biblitheque()
    {
        $_req=$this->_con->prepare('INSERT INTO bitabu SET admin=?, email=?, phone=?, pass=?');
        $_req->execute(array($this->_admin, $this->_email, $this->_phone, $this->_pass));
    }

    public function update_biblitheque()
    {

    }

    public function delete_bibliotheque()
    {

    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->_admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->_admin = $admin;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->_pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->_pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
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
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }





}