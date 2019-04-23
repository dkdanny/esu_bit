<?php

/**
 * Created by PhpStorm.
 * User: Dany
 * Date: 06/08/2018
 * Time: 11:08
 */
class Abonne
{
    private $_id;
    private $_id_suj;
    private $_id_comment;
    private $_id_abonne;
    private $_sujet;
    private $_commentaire;
    private $_commentaire_livre;
    private $_id_livre;
    private $_con;

    /**
     * Abonne constructor.
     * @param $_id
     * @param $_id_suj
     * @param $_id_comment
     * @param $_id_abonne
     * @param $_sujet
     * @param $_commentaire
     * @param $_con
     */
    public function __construct()
    {
        include_once 'connecting.php';
        $this->_con = Connecting::getConnexion();
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
    public function getSujet()
    {
        return $this->_sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet)
    {
        $this->_sujet = $sujet;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->_commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->_commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getCommentaireLivre()
    {
        return $this->_commentaire_livre;
    }

    /**
     * @param mixed $commentaire_livre
     */
    public function setCommentaireLivre($commentaire_livre)
    {
        $this->_commentaire_livre = $commentaire_livre;
    }

    /**
     * @return mixed
     */
    public function getIdLivre()
    {
        return $this->_id_livre;
    }

    /**
     * @param mixed $id_livre
     */
    public function setIdLivre($id_livre)
    {
        $this->_id_livre = $id_livre;
    }

    /**
     * @return string
     * enregistre dans bdd les commentaire du forum avec l'abonne
     */
    public function __forumComments()
    {
        $_sujet = $this->_con->prepare('INSERT INTO forum_commntaire SET id_abonne=?, id_suj=?, commentaire=?');
        $_sujet->execute(array($this->_id_abonne, $this->_id_suj, $this->_commentaire));
        return $this->_con->lastInsertId();
    }

    /**
     * @return string
     * enregistre dans la bdd les sujets du forum
     */
    public function __forumSujets()
    {
        $_sujet = $this->_con->prepare('INSERT INTO forum_sujet SET id_abonne = ? , sujet = ?');
        $_sujet->execute(array($this->_id_abonne, $this->_sujet));
        return $this->_con->lastInsertId();
    }

    /**
     * @return string
     */
    public function __commenter_livre()
    {
        $_req = $this->_con->prepare('INSERT INTO commentair_livre SET id_titreTrav = ?, id_abonne = ?, comment = ?');
        $_req->execute(array($this->_id_livre, $this->_id_abonne, $this->_commentaire_livre));
        return $this->_con->lastInsertId();
    }

    /**
     * @param $comment
     * @return array
     */
    public function __read_comment_livre($comment)
    {
        $_req = $this->_con->prepare('SELECT * FROM commentair_livre WHERE id_titreTrav = ?');
        $_req->execute(array($comment));
        return $_req->fetchAll();
    }

    /**
     * @param $com
     * @return array
     * affiche les commentaire a l'instant selon les sujets
     */
    public function __forumAllComment($commentair)
    {
        $_req = $this->_con->prepare('SELECT * FROM forum_commntaire WHERE id_suj=? ORDER BY id DESC');
        $_req->execute(array($commentair));
        return $_req->fetchAll();
    }

    /**
     * @param $ab
     * @return mixed
     * affiche l'identifiant du commentataire
     */
    public function __quicomment($ab)
    {
        $_req = $this->_con->prepare('SELECT id_abonne, username FROM liste_abonne WHERE id_abonne=?');
        $_req->execute(array($ab));
        return $_req->fetch()['username'];
    }

    /**
     * @param $_questTraite
     * @return array
     * recherche des sujets deja traites dans sur le forum
     */
    public function __forumRechercheSujet($_questTraite)
    {
        $_search = $this->_con->prepare('SELECT * FROM forum_sujet, liste_abonne WHERE liste_abonne.id_abonne = forum_sujet.id_abonne AND (forum_sujet.sujet) LIKE :mot_cle');
        $_search->execute(array('mot_cle' => '%' . $_questTraite . '%'));
        return $_search->fetchAll();
    }

}