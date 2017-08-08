<?php 

require_once 'modele/billet.php';
require_once 'vue/vue.php';
require_once 'modele/commentaire.php';

class ControleurChapitres {
    private $billetChap;

//instancies la classe modele billet
    public function __construct(){
        $this->billetChap= new Billet();
    }

/*
*Recupére la liste des billet du blog (getChapitres)
*Instancie la classee Vue et prend en paramètre l'action qui dertermine le fichier vue à utiliser
*Utilisation de la fonction generer(),qui renvoi la vue (gabarit,partie spécifique)
*/
    public function Chapitres(){
        $chapitres = $this->billetChap->getChapitres();
        $vue = new Vue( "Chapitres","");
        $vue->generer(array('billetChap'=>$chapitres));
    }

}
