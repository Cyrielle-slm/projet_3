<?php
require_once 'modele/billet.php';
require_once 'vue/vue.php';
require_once 'modele/commentaire.php';

class ControleurFormAjout {
    
    private $ajoutnew;

/*
* Instancie la classee VueAdmin et prend en paramètre l'action qui dertermine le fichier vue à utiliser
*Utilisation de la fonction generer(),qui renvoi la vue (gabarit,partie spécifique)
*/
    public function FormAjout(){
        $Ajoutbillet = $this->ajoutnew;
        $vueAdmin = new Vue( "FormAjout","Admin");
        $vueAdmin->generer(array('ajoutnew'=>$Ajoutbillet));
    }

}
