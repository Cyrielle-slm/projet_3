<?php
require_once 'modele/billet.php';
require_once 'vue/vueAdmin.php';
require_once 'modele/commentaire.php';

class ControleurListeBillet {
    private $billet;

/*
*Constructeur
*instancies la classe Billet
*/
    public function __construct(){
        $this->billet= new Billet();
    }

/*
*Renvoi la liste des billets du blog (getBillets())
* Instancie la classee VueAdmin et prend en paramètre l'action qui dertermine le fichier vue à utiliser
*Utilisation de la fonction generer(),qui renvoi la vue (gabarit,partie spécifique)
*/
    public function ListeBillet(){
        $listebillets = $this->billet->getBillets();
        $vueAdmin = new VueAdmin( "ListeBillet");
        $vueAdmin->generer(array('billets'=>$listebillets));
    
}

}