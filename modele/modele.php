<?php

abstract class Modele{

/*
*Objet PDO d'accées à la BDD
*/
    private $bdd;

/*
*Si $params est nul 
*$resultat appel la getBdd() et s'exécute directement
*Sinon $resultat  appel la getBdd faire un requete preparé
*Retourne le resultat de $resultat
*/
    protected function executerRequete( $sql, $params = null) {
        if($params==null){
            $resultat= $this->getBdd()->query($sql); 
        }
       else{
       $resultat = $this->getbdd()->prepare($sql);
       $resultat->execute($params);
    }
    return $resultat;  
}

/*
*Renvoi un objet de connexion a la BDD et initialise la connexion au besoin
*/
private function getBdd(){
    if ($this->bdd == null){
       $this->bdd= new PDO('mysql:host=db672103619.db.1and1.com;dbname=db672103619;charset=utf8','dbo672103619','aC191214.');
    }
    return $this->bdd;
}
}