<?php

/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 13/08/2018
 * Time: 11:52
 */
class Admin
{
    private $_id;
    private $_nom_biblio;
    private $_administrateur;
    private $_password;
    private $_descript_biblio;
    private $_con;

    /**
     * Admin constructor.
     * @param $_id
     * @param $_administrateur
     * @param $_password
     * @param $_con
     */
    public function __construct()
    {
        include_once 'connecting.php';
        $this->_con=Connecting::getConnexion();
    }

    /**
     * @return mixed
     */
    public function getNomBiblio()
    {
        return $this->_nom_biblio;
    }

    /**
     * @param mixed $nom_biblio
     */
    public function setNomBiblio($nom_biblio)
    {
        $this->_nom_biblio = $nom_biblio;
    }

    /**
     * @return mixed
     */
    public function getAdministrateur()
    {
        return $this->_administrateur;
    }

    /**
     * @param mixed $administrateur
     */
    public function setAdministrateur($administrateur)
    {
        $this->_administrateur = $administrateur;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getDescriptBiblio()
    {
        return $this->_descript_biblio;
    }

    /**
     * @param mixed $descript_biblio
     */
    public function setDescriptBiblio($descript_biblio)
    {
        $this->_descript_biblio = $descript_biblio;
    }

    /**
     * @return mixed
     */
    public function __connexionAdmin()
    {
        $q=$this->_con->prepare('SELECT * FROM biblioteque WHERE adminbib =:administateur AND pass =:password');
        $q->execute(array('administateur'=>$this->_administrateur,'password'=>$this->_password));
        return $q->fetch();
    }

    /**
     * @return array
     */
    public function __afficherbib()
    {
        $bib=$this->_con->prepare('SELECT * FROM biblioteque WHERE nom_bib, description ');
        $bib->execute(array($this->_nom_biblio, $this->_descript_biblio));
        return $bib->fetchAll();
    }



}