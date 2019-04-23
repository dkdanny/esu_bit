<?php

/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 06/08/2018
 * Time: 10:43
 */
class Livre
{
    private $_id;
    private $_id_bib;
    private $_titre;
    private $_typeFile;
    private $_domaine;
    private $_resumer_trav;
    private $_date_publication;
    private $_con;

    /**
     * Livre constructor.
     * @param $_id
     * @param $_titre
     * @param $_typeFile
     * @param $_domaine
     * @param $_Trav_resumer
     * @param $_comment
     * @param $_id_abonne
     * @param $_id_titre_travail
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
    public function getTitre()
    {
        return $this->_titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getTypeFile()
    {
        return $this->_typeFile;
    }

    /**
     * @param mixed $typeFile
     */
    public function setTypeFile($typeFile)
    {
        $this->_typeFile = $typeFile;
    }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return $this->_domaine;
    }

    /**
     * @param mixed $domaine
     */
    public function setDomaine($domaine)
    {
        $this->_domaine = $domaine;
    }

    /**
     * @return mixed
     */
    public function getResumerTrav()
    {
        return $this->_resumer_trav;
    }

    /**
     * @param mixed $resumer_trav
     */
    public function setResumerTrav($resumer_trav)
    {
        $this->_resumer_trav = $resumer_trav;
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
    public function getComment()
    {
        return $this->_comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->_comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getIdAbonne()
    {
        return $this->_id_abonne;
    }

    /**
     * @param mixed $id_abonne
     */
    public function setIdAbonne($id_abonne)
    {
        $this->_id_abonne = $id_abonne;
    }

    /**
     * @return mixed
     */
    public function getIdTitreTravail()
    {
        return $this->_id_titre_travail;
    }

    /**
     * @param mixed $id_titre_travail
     */
    public function setIdTitreTravail($id_titre_travail)
    {
        $this->_id_titre_travail = $id_titre_travail;
    }

    public function __publierTravail()
    {
        $_donnee = $this->_con->prepare('INSERT INTO liste_travaux SET id_bib=?, titreTrav=?, formatTrav=?, domaine=?, trav_resumer=?');
        $_donnee->execute(array($this->_id_bib, $this->_titre, $this->_typeFile, $this->_domaine, $this->_resumer_trav));
    }

    /*public function __commen()
    {
        $_req = $this->_con->prepare('INSERT INTO commentair_livre SET commentair = ?, id_titreTrav = ?');
        $_req->execute(array($this->_comment, $this->_titre));
    }

    public function __re()
    {
        $_req = $this->_con->prepare('SELECT * FROM commentair_livre WHERE id = ?');
        $_req->execute(array());
        return $_req->fetchAll();
    }*/


    /**
     * @param $travail
     * @return mixed
     */
   /* public function __lire_travail($travail)
    {
        $_read = $this->_con->prepare('SELECT formatTrav FROM liste_travaux');
        $_read->execute(array($travail));
        return $_read->fetch();
    }*/

    /**
     * @param $_ouvrage
     * @return array
     */
    public function __listerOuvrageParRecherche($_ouvrage)
    {
        $_donnee = $this->_con->prepare('SELECT * FROM liste_travaux WHERE CONCAT (titreTrav, domaine, date_publication, nom_fichier) LIKE :mot_cle ');
        $_donnee->execute(array('mot_cle'=>'%'.$_ouvrage.'%'));
        return $_donnee->fetchAll();
    }
    
    public function __read_resultats($travail)
    {
        $_req = $this->_con->prepare('SELECT * FROM liste_travaux WHERE id = ?');
        $_req->execute(array($travail));
        return $_req->fetch();
    }

    /**
     *
     */
    public function __update()
    {
        $_donnee = $this->_con->prepare('UPDATE liste_travaux SET titreTrav=?, formatTrav=?, domaine=?, trav_resumer=?, date_publication=? WHERE id=?');
        $_donnee->execute(array($this->_titre, $this->_typeFile, $this->_domaine, $this->_resumer_trav, $this->_date_publication, $this->_id));

    }
}