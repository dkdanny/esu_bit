<?php

/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 10/08/2018
 * Time: 11:06
 */
class Forum
{
    private $_id;
    private $_id_abonne;
    private $_id_suj;
    private $_id_comment;
    private $_con;

    /**
     * Forum constructor.
     * @param $_id
     * @param $_id_abonne
     * @param $_id_suj
     * @param $_comment
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
    public function getIdSuj()
    {
        return $this->_id_suj;
    }

    /**
     * @param mixed $id_suj
     */
    public function setIdSuj($id_suj)
    {
        $this->_id_suj = $id_suj;
    }

    /**
     * @return mixed
     */
    public function getIdComment()
    {
        return $this->_id_comment;
    }

    /**
     * @param mixed $id_comment
     */
    public function setIdComment($id_comment)
    {
        $this->_id_comment = $id_comment;
    }

    /**
     * @param $search
     * @return array
     * recherche des sujets sur le forum
     */
    public function __forumAllSujet($search)
    {
        $_allSujet=$this->_con->prepare('SELECT * FROM forum_discustion WHERE CONCAT (id_suj, id_comment, id_abonne) LIKE :mot_cle');
        $_allSujet->execute(array('mot_cle'=>'%'.$search.'%'));
        return $_allSujet->fetchAll();
    }

    /**
     * @param $id
     * @return mixed
     * affiche le sujet et son auteur sur l'interface des discussions
     */
    public function __selectSujet($id)
    {
        $_donnee=$this->_con->prepare('SELECT * FROM forum_sujet, liste_abonne WHERE liste_abonne.id_abonne = forum_sujet.id_abonne AND forum_sujet.id=?');
        $_donnee->execute(array($id));
        return $_donnee->fetch();
    }

    /**
     * @return array
     * affiche tout les sujets traites sur le forum dans un widget
     */
    public function __afficheSujet()
    {
        $_save=$this->_con->prepare('SELECT id,sujet FROM forum_sujet');
        $_save->execute();
        return $_save->fetchAll();
    }
}