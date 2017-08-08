<?php
require_once 'modele/commentaire.php';
require_once 'vue/vue.php';
require_once 'controleurBillet.php';

class ControleurSignale {

    private $signal;
    private $commsign; 
    private $billet;

/*
*Constructeur
*Instancies les classe Commentaire et ControleurBillet
*/
    public function __construct(){
        $this->signal= new Commentaire();
        $this->commsign= new Commentaire();
        $this->billet= new ControleurBillet();
        
    }

/*
*Recupere un commentaire(getComm())
* Incremente 1 au signalement sur ce même commmentaire(getSignal($idBillet))
* Renvoi sur le billet du commentaire signalé
*/
    public function signale($id,$idBillet){
        $Signalcomm = $this->commsign->getComm();
        $signalement = $this->signal->getSignal($id); 
        $billetsignal= $this->billet->billet($idBillet);
        return $billetsignal;  
    }

}?>
