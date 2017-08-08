<?php

require_once 'modele/billet.php';
require_once 'modele/commentaire.php';
require_once 'vue/vue.php';

class ControleurBillet {
    private $billet;
    private $commentaire;

/*
*Constructeur
*Instancies les classes Billet et Commentaire
*/
    public function __construct(){
        $this->billet= new Billet();
        $this->commentaire= new Commentaire();
    }

/*
*Appel à la fonction getBillet($idBillet) qui renvoi un seul billet
*Appel à getCommentaires(*idBillet) qui renvoi les commentaires associés
*Instancie la classee Vue et prend en paramètre l'action qui dertermine le fichier vue à utiliser et gabarit
*Utilisation de la fonction generer(),qui renvoi la vue (gabarit,partie spécifique)
*/
    public function billet($idBillet){
    $billet= $this->billet->getBillet($idBillet);
    $commentaires = $this->commentaire->getCommentaires($idBillet);
    $vue = new Vue("Billet",""); 
    $vue->generer(array('billet'=>$billet,'commentaires' =>$commentaires));
    }


/*
*Sauvegarde du commentaire (Fonction ajouterCommentaire())
*Actualise le billet avec ses commentaires
*/
    public function commenter($auteur,$commentaire,$idBillet){
       $this->commentaire->ajouterCommentaire($auteur,$commentaire,$idBillet);
       $this->billet($idBillet);
    }

/*
*Sauvegarde l'ajout d'un billet (Fonction ajouterBillet())
*/
    public function ajouter($titre,$contenu,$date_creation_fr){
    $this->billet->ajouterBillet($titre,$contenu,$date_creation_fr); 
   }
   
}
