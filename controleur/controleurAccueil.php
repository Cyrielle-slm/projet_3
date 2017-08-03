<?php
require_once 'modele/billet.php';
require_once 'vue/vueAcc.php';

class ControleurAccueil {

    private $billet;
      

/*
* Constructeur
* Instancie la classe Billet
*/
    public function __construct(){
        $this->billet= new Billet();
        
    }

/*
* Retourne tous les billets du blog
* Instancie la classee VueAcc et prend en paramètre l'action qui dertermine le fichier vue à utiliser
*Utilisation de la fonction generer(),qui renvoi la vue (gabarit,partie spécifique)
*/
    public function accueil(){
        $listebillets = $this->billet->getBilletsAcc();
        $vueAcc = new VueAcc( "Accueil");
        $vueAcc->generer(array('billets'=>$listebillets));
    }
}
