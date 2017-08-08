<?php
require_once 'modele/billet.php';
require_once 'vue/vue.php';
require_once 'modele/commentaire.php';

class ControleurListeComm {
    private $comm;

/*
*Constructeur
*Instancies la classe Commentaire
*/
    public function __construct(){
        $this->comm= new Commentaire();
    }

/*
* Recupére la liste des commentaires (getComm())
* Instancie la classee VueAdmin et prend en paramètre l'action qui dertermine le fichier vue à utiliser
* Utilisation de la fonction generer(),qui renvoi la vue (gabarit,partie spécifique)
*/
    public function ListeComm(){
        $listeCommentaires = $this->comm->getComm();
        $vueAdmin = new Vue( "ListeComm","Admin");
        $vueAdmin->generer(array('comm' => $listeCommentaires));
    }

}
