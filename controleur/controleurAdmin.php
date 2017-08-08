<?
require_once 'modele/admin.php';
require_once 'vue/vue.php';
require_once 'routeur.php';
require_once 'controleurListeBillet.php';


class ControleurAdmin{
    private $admin;
    private $sctrlListeBillet;
    private $sctrlAccueil;


/*
*Constructeur
*Instancie les classes utile
*/
    public function __construct(){
        $this->admin= new Admin();
        $this->ctrlListeBillet = new ControleurListeBillet();
        $this->ctrlAccueil = new ControleurAccueil();
    }


/*
*Génére la vue de connexion
*/
public function vueConnexion(){
    $vueConnexion = new Vue( "Connexion","");
    $vueConnexion->generer(array('contenu'=>$vueConnexion));
    }
/*
*Condition qui appel a la methode Admin connexion()
*Appel a la methode Admin getAdmin()
*Appel a la fonction getSession() setAttribut()
*Appel a la fonction ListeBillet() qui instancie la vue 
*/

public function connecter($email,$passe){ 
    if($this->admin->connexion($email,$passe)){
            $admin =$this->admin->getAdmin($email,$passe);
            $this->setAttribut("email",$admin['email']);
            $this->setAttribut("passe",$admin['passe']);
            $this->ctrlListeBillet->ListeBillet();
         }
        else{
        $vueErreur = new Vue( "ConnexionErreur","");
        $vueErreur->generer(array('contenu'=>$vueErreur));
    
        }
    }

/*
*Arrete la session
*Appel l'accueil
*/
    public function deconnecter(){
        $this->detruire();
         $this->ctrlAccueil->accueil(); 
    }

}
