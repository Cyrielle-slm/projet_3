<?php
require_once 'modele.php';

class Billet extends Modele {

/*
*Selectionne les informations sur tous les billets triés par ordre decroissant
*Execute la requete (executerRequete($sql))
*Retourne la requete
*/
    public function getBillets(){
        $sql ='SELECT id, titre, contenu, DATE_FORMAT(date_creation_fr, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY id DESC';
        $billets= $this->executerRequete($sql);
        return $billets;
    }

/*
*Selectionne les informations sur les 4 derniers billets
*Execute la requete (executerRequete($sql))
*Retourne la requete
*/
    public function getBilletsAcc(){
        $sql ='SELECT id, titre, contenu, DATE_FORMAT(date_creation_fr, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY id DESC LIMIT 4';
        $billets= $this->executerRequete($sql);
        return $billets;
    }

/*
*Selectionne les informations sur un billet selon son id
*Execute la requete(executerRequete($sql),array($idBillet))
*Un fois les informations recupérés les retournent
*Sinon mesage d'erreur 
*/
    public function getBillet($idBillet){
        $sql='SELECT id, titre, contenu, DATE_FORMAT(date_creation_fr, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?';
        $billet =$this->executerRequete($sql, array($idBillet));
        if($billet->rowCount()==1)
        return $billet->fetch();
        else
        throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
       
    }
/*
*Insert le nouveau billet dans la bdd
*Execute la requete(executerRequete($sql),array())
*/
    public function ajouterBillet($titre,$contenu,$date_creation_fr){
	$sql='INSERT INTO billets(titre, contenu, date_creation_fr) VALUES( ?,?,?)';
    $ajoutBillet= $this->executerRequete($sql, array($titre,$contenu,$date_creation_fr));
        
    }

/*
*Supprime un billet selon son id
*Execute la requete(executerRequete($sql),array($idBillet))
*/
    public function supprBillet($idBillet){
	$sql='DELETE  FROM billets WHERE id = ?';
    $suppr= $this->executerRequete($sql,array($idBillet));
    }


/*
*Enregistre les modfications sur un billet
*Execute la requete(executerRequete($sql),array())
*/
    public function modifBillet($titre,$contenu,$idBillet){
	$sql='UPDATE billets SET titre = ?, contenu = ? WHERE id = ?';
    $ajoutModif= $this->executerRequete($sql, array($titre,$contenu,$idBillet));
        
    }
/*
*Selectionne les informations sur les billets 
*Execute la requete(executerRequete($sql))
*Un fois les informations recupérés les retournent
*/
   public function getChapitres(){
        $sql ='SELECT id, titre, contenu, DATE_FORMAT(date_creation_fr, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY id ASC';
        $billets= $this->executerRequete($sql);
        return $billets;
    }

}