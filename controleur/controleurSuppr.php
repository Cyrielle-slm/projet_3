<?php

require_once 'modele/billet.php';
require_once 'vue/vue.php';
require_once 'modele/commentaire.php';

class ControleurSuppr {

private $suppr;
private $supprComm;

/*
*Controleur
*Instancie les classes Billet et Commentaires
*/
public function __construct(){
        $this->suppr= new Billet;
        $this->supprComm= new Commentaire;
    }

/*
*Supprime le billet de la bdd (supprBillet) en fonction de son id
*/
public function suppr($id){
      $this->suppr->supprBillet($id);
      
}

/*
*Supprime le commentaire de la bdd (supprCommentaire) grâce a son id
*/
public function supprComm($id){
    $this->supprComm->supprCommentaire($id);
}
}
