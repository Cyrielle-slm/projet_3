<?
require_once 'modele/admin.php';
require_once 'vue/vueAdmin.php';
require_once 'controleurSession.php';
require_once 'routeur.php';
require_once 'controleurListeBillet.php';


class ControleurAdmin{
    private $admin;
    private $sctrlSession;
    private $sctrlListeBillet;
    private $sctrlAccueil;


/*
*Constructeur
*Instancie les classes utile
*/
    public function __construct(){
        $this->admin= new Admin();
        $this->ctrlSession = new ControleurSession();
        $this->ctrlListeBillet = new ControleurListeBillet();
        $this->ctrlAccueil = new ControleurAccueil();
    }

/*
*Retour de l'objet ctrlSession
*/
    public function getSession(){
      return $this->ctrlSession;
    }
/*
*Génére la vue de connexion
*/
public function vueConnexion(){
    $vueConnexion = new Vue( "Connexion");
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
            $this->getSession()->setAttribut("email",$admin['email']);
            $this->getSession()->setAttribut("passe",$admin['passe']);
            $this->ctrlListeBillet->ListeBillet();
         }
        else{
        $vueErreur = new Vue( "ConnexionErreur");
        $vueErreur->generer(array('contenu'=>$vueErreur));
    
        }
    }

/*
*Arrete la session
*Appel l'accueil
*/
    public function deconnecter(){
        $this->getSession()->detruire();
         $this->ctrlAccueil->accueil(); 
    }

}