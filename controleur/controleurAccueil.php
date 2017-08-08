<?php
require_once 'modele/billet.php';
require_once 'vue/vue.php';

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
* Instancie la classee Vue et prend en paramètre l'action qui dertermine le fichier vue à utiliser et le gabarit
*Utilisation de la fonction generer(),qui renvoi la vue (gabarit,partie spécifique)
*/
    public function accueil(){
        $listebillets = $this->billet->getBilletsAcc();
        $vueAcc = new Vue( "Accueil","Admin");
        $vueAcc->generer(array('billets'=>$listebillets));
    }
}
