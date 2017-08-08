<?php

require_once 'modele/billet.php';
require_once 'modele/modele.php';
require_once 'vue/vue.php';

class ControleurModif {
private $modif;
private $billet;
private $ajoutModif;


/*
*Constructeur
*Instancies la classe Billet
*/
public function __construct(){
        $this->modif= new Billet;
        $this->billet= new Billet;
        $this->ajoutModif = new Billet;
    }

/*
* Récupere le billet à modifier selon son id (getBillet($idBillet))
* Instancie la classee VueAdmin et prend en paramètre l'action qui dertermine le fichier vue à utiliser
* Utilisation de la fonction generer(),qui renvoi la vue (gabarit,partie spécifique)
*/
 public function modif($idBillet){
        $billet=$this->billet->getBillet($idBillet);
        $vueAdmin = new Vue( "Modif","Admin");
        $vueAdmin->generer(array('billet'=>$billet));
    }

/*Sauvegarde la modification grâce à la fonction modifBillet($tutre,$conteu,$idBillet)
*/
    public function ajoutModif($titre,$contenu,$idBillet){
     $this->ajoutModif->modifBillet($titre,$contenu,$idBillet);
      
}
}
