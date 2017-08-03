<?php

require_once 'modele/admin.php';
require_once 'vue/vueAdmin.php';


class ControleurSession {
/*Cconstructeur
*Démarre ou restaure la session
*/
    public function __construct(){
        session_start();
    }


/*
*Détruit la session actuelle
*/
   public function detruire(){
       session_destroy();
   }

/*
*Ajout d"un attribut $nom pour le nom de l'attribut
* $valeur pour sa valeur
*/
    public function setAttribut($nom, $valeur){
       $_SESSION[$nom] = $valeur;
    }
}