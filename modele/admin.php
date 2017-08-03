<?php
require_once 'modele.php';

class Admin extends Modele{

 /*
 *Vérifie si l'email et le mdp correspondents
 */
 public function connexion($email,$passe){
        $sql ='SELECT id,email,passe FROM admin  WHERE email= ? AND passe= ?';
        $admin= $this->executerRequete($sql,array($email,$passe));
        return ($admin->rowCount()==1);
        
    }
/*
*Récupére les information de la ligne qui correspond a l'email et au mdp
*/
public function getAdmin($email,$passe){
    $sql ='SELECT id,email,passe FROM admin  WHERE email= ? AND passe= ?';
    $admin= $this->executerRequete($sql,array($email,$passe));
        if ($admin->rowCount()==1){
            return $admin->fetch();
        }
        else{

       throw new  Exception("Aucun utilisateur ne correspond aux identifiants donnés");
        }  
    }

}