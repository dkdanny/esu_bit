<?php

/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 20/08/2018
 * Time: 12:24
 */
class Bibliotheque
{
    private $_id;
    private $_id_bib;
    private $_nom;
    private $_admin;
    private $_password;
    private $_re_password;
    private $_sujetTrav;
    private $_typefile;
    private $_nomfile;
    private $_domaineTrav;
    private $_resumerTrav;
    private $_date_publication;
    private $_con;

    /**
     * Bibliotheque constructor.
     * @param $_id
     * @param $_id_bib
     * @param $_nom
     * @param $_admin
     * @param $_password
     * @param $_re_password
     * @param $_sujetTrav
     * @param $_typefile
     * @param $_domaineTrav
     * @param $_resumerTrav
     * @param $_date_publication
     * @param $_con
     */

    public function __construct()
    {
        include_once 'connecting.php';
        $this->_con=connecting::getConnexion();
    }

    /**
     * @return mixed
     */
    public function getIdBib()
    {
        return $this->_id_bib;
    }

    /**
     * @param mixed $id_bib
     */
    public function setIdBib($id_bib)
    {
        $this->_id_bib = $id_bib;
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
    public function getRePassword()
    {
        return $this->_re_password;
    }

    /**
     * @param mixed $re_password
     */
    public function setRePassword($re_password)
    {
        $this->_re_password = $re_password;
    }

    /**
     * @return mixed
     */
    public function getSujetTrav()
    {
        return $this->_sujetTrav;
    }

    /**
     * @param mixed $sujetTrav
     */
    public function setSujetTrav($sujetTrav)
    {
        $this->_sujetTrav = $sujetTrav;
    }

    /**
     * @return mixed
     */
    public function getTypefile()
    {
        return $this->_typefile;
    }

    /**
     * @param mixed $typefile
     */
    public function setTypefile($typefile)
    {
        $this->_typefile = $typefile;
    }

    /**
     * @return mixed
     */
    public function getDomaineTrav()
    {
        return $this->_domaineTrav;
    }

    /**
     * @param mixed $domaineTrav
     */
    public function setDomaineTrav($domaineTrav)
    {
        $this->_domaineTrav = $domaineTrav;
    }

    /**
     * @return mixed
     */
    public function getResumerTrav()
    {
        return $this->_resumerTrav;
    }

    /**
     * @param mixed $resumerTrav
     */

    public function setResumerTrav($resumerTrav)
    {
        $this->_resumerTrav = $resumerTrav;
    }

    /**
     * @return mixed
     */
    public function getDatePublication()
    {
        return $this->_date_publication;
    }

    /**
     * @param mixed $date_publication
     */
    public function setDatePublication($date_publication)
    {
        $this->_date_publication = $date_publication;
    }

    /**
     * @return mixed
     */
    public function getNomfile()
    {
        return $this->_nomfile;
    }

    /**
     * @param mixed $nomfile
     */
    public function setNomfile($nomfile)
    {
        $this->_nomfile = $nomfile;
    }

    /**
     * @return array
     * affiche toutes les bibliotheques disponibles de la plateforme
     */
    public function __presenter_bib()
    {
        $_save=$this->_con->prepare('SELECT id, nom_bib,description,logo FROM biblioteque');
        $_save->execute();
        return $_save->fetchAll();
    }

    /**
     * @return array
     * repertorier toutes les publications
     */
    public function __repertoire_travaux($id)
    {
        $_save=$this->_con->prepare('SELECT * FROM liste_travaux WHERE id_bib=?');
        $_save->execute(array($id));
        return $_save->fetchAll();
    }

    /**
     * @return string
     * ajouter un travail dans la bibliotheque
     */
    public function __ajouter_travail()
    {
        $_donnees = $this->_con->prepare('INSERT INTO liste_travaux  SET id_bib=?,titreTrav=?,formatTrav=?,domaine=?,trav_resumer=?,date_publication=?');
        $_donnees->execute(array($this->_id_bib, $this->_sujetTrav, $this->_typefile, $this->_domaineTrav, $this->_resumerTrav, $this->_date_publication));
        return $this->_con->lastInsertId();
    }

    /**
     * @param $bibliot
     * @return mixed
     * associer le nom de la bibliotheque a chaque recherche
     */
    public function __ajouter_par($bibliot)
    {
        $_save = $this->_con->prepare('SELECT nom_bib FROM biblioteque WHERE id=?');
        $_save->execute(array($bibliot));
        return $_save->fetch()['nom_bib'];
    }

    /**
     * @return array
     * la modification des informations du travail
     */
    public function __update_info_travail()
    {
        $_save=$this->_con->prepare('UPDATE liste_travaux SET titreTrav=?, domaine=?, descriTrav=?');
        $_save->execute();
        return $_save->fetchAll();
    }

    /**
     * @return array
     * la modification des informations du travail
     */
    public function __champs_modifier()
    {
        $_save=$this->_con->prepare('SELECT titreTraV, domaine, descriTrav FROM liste_travaux');
        $_save->execute();
        return $_save->fetchAll();
    }

    public function __nbre_publication_par_bibliotheque()
    {
        $_req = $this->_con->prepare('SELECT COUNT(*) AS titreTrav, domaine, trav_resumer FROM liste_travaux WHERE id=id_bib');
        $_req->execute();
        return $_req->fetch();
    }

}