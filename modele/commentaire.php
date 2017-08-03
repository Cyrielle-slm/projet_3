<?php

require_once 'modele.php';
class Commentaire extends Modele{

/*
*Selectionne les commentaires associé à un billet grâce a son id
*Execute la requete(executerRequete($sql),array($idBillet))
*Retourne le resultat
*/
    public function getCommentaires($idBillet){
        $sql= 'SELECT id, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire, signalement FROM commentaires WHERE id_billet = ?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }

/*
*Insert les nouveaux commentaire dans la bdd
*Execute la requete(executerRequete($sql),array())
*/
    public function ajouterCommentaire($auteur,$commentaire,$idBillet){
        $sql='INSERT INTO commentaires(auteur,commentaire,date_commentaire,id_billet) VALUES (?,?,?,?)';
        $date = date(DATE_W3C);
        $this->executerRequete($sql, array($auteur, $commentaire,$date, $idBillet));
    }

/*
*Selectionne les informations sur un seul commentaire
*Execute la requete(executerRequete($sql))
*Un fois les informations recupérés les retournent
*/
    public function getComm(){
        $sql= 'SELECT id, auteur, commentaire,id_billet, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire, signalement FROM commentaires ORDER BY signalement DESC';
        $date = date(DATE_W3C);
        $comm = $this->executerRequete($sql);
        return $comm;
    }

/*
*Supprime un commentaire en fonction de son id
*Execute la requete(executerRequete($sql),array($id))
*/
    public function supprCommentaire($id){
        $sql='DELETE FROM commentaires WHERE `commentaires`.`id` =?';
        $supprComm=$this->executerRequete($sql,array($id));
    }

/*
*Modifie le signalement en l'incrementant d'1 d'après son id
*Execute la requete(executerRequete($sql),array($i))
*/
    public function getSignal($id){
        $sql='UPDATE  commentaires SET signalement = signalement+1 WHERE `commentaires`.`id` =?';
        $signalement= $this->executerRequete($sql,array($id));
       
    }

}