<?php
require_once 'controleurAccueil.php';
require_once 'controleurBillet.php';
require_once 'vue/vue.php';
require_once 'controleurListeBillet.php';
require_once 'controleurListeComm.php';
require_once 'controleurFormAjout.php';
require_once 'controleurSuppr.php';
require_once 'controleurModif.php';
require_once 'controleurSignale.php';
require_once 'controleurChapitres.php';
require_once 'controleurAdmin.php';

class Routeur{

  /*
  *Attributs
  */
    private $ctrlAccueil;
    private $ctrlBillet;
    private $ctrlListeBillet;
    private $ctrlFormAjout;
    private $ctrlListeComm;
    private $ctrlSuppr;
    private $ctrlModif;
    private $ctrlSignale;
    private $crtlChapitres;
    private $crtlAdmin;
    
 
      
/*
*Constructeur
*Instancie les classes requises
*/
    public function __construct(){
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlBillet = new ControleurBillet();
        $this->ctrlListeBillet = new ControleurListeBillet();
        $this->ctrlListeComm = new ControleurListeComm();
        $this->ctrlFormAjout= new ControleurFormAjout();
        $this->ctrlSuppr = new ControleurSuppr();
        $this->ctrlModif = new ControleurModif();
        $this->ctrlSignale = new ControleurSignale();
        $this->ctrlChapitres = new ControleurChapitres();
        $this->ctrlAdmin = new ControleurAdmin();
        
    }

/*
*Recherche un parametre dans un tableau $_GET ou $_POST 
*Vérifie qu'ils existent
*Sinon message d'erreur
*/
    public function getParametre($tableau,$nom){
        if(isset($tableau[$nom])){
            return $tableau[$nom];
        }
        else
        throw new Exception ("Paramétre '$nom' absent");
    }



/*
*Définit la requête entrante selon  l'action
*Si une action est définie dans URL
*Et que l'action = billet 
*$idBillet correspondra à l'id recuperé dans URL et != 0
*Appel de la fonction billet()
*Sinon message d'erreur
**/
  public function routerRequete() {
    try {
      if (isset($_GET['action'])) {
        if ($_GET['action'] == 'billet') {
            $idBillet = intval($this->getParametre($_GET, 'id'));
            if ($idBillet != 0) {
              $this->ctrlBillet->billet($idBillet);
            }
            else
              throw new Exception("Identifiant de billet non valide");
          }

/*Si l'action est egale à ajouter
*$titre fait appel a getParamètre qui recupére le titre du formulaire
*$ontenu fait appel a getParamètre qui recupére le contenu du formulaire
*Appel ajouter() sauvegarde le nouveau billet dans la bdd
*Redirection sur la liste des billets
*/
    if ($_GET['action'] == 'ajouter') {
      $titre = $this->getParametre($_POST,'titre');
      $contenu = $this->getParametre($_POST,'contenu');
      $date_creation_fr = date('Y-m-d H:i:s');
      $this->ctrlBillet->ajouter($titre, $contenu, $date_creation_fr);
      $this->ctrlListeBillet->ListeBillet();
    }

/*Si l'action egale commenter 
*$auteur fait appel a getParamètre qui recupére le auteur du formulaire
*L'opération est répété avec $contenu et $idBillet
*Appel commenter() qui insert le commentaire dans la bdd 
*/   
    if ($_GET['action'] == 'commenter') {
      $auteur = $this->getParametre($_POST,'auteur');
      $contenu = $this->getParametre($_POST,'contenu');
      $idBillet = $this->getParametre($_POST,'id');
      $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
    }

/*Si l'action egale ListeBillet
*L'objet appel le ctrlListeBillet pour accéder à ListeBillet()
*/
    if (($_GET['action'] == 'ListeBillet')){
      $this->ctrlListeBillet->ListeBillet();
      }

  if (($_GET['action'] == 'connecter')){
      $this->ctrlAdmin->vueConnexion();
      }
//Connexion recupére les information données dans le formulaire de connexion et appel la fonction Admin qui vérifie la correspondance entre email et mot de passe
      if (($_GET['action'] == 'connexion')){
      $email = $this->getParametre($_POST,'email');
      $passe = $this->getParametre($_POST,'passe');
      $this->ctrlAdmin->connecter($email,md5($passe));

      }

/*Si l'action egale deconnexion
*L'objet appel le ctrlAdmin pour accéder à deconnexion()
*/
      if ($_GET['action'] == 'deconnexion'){
      $this->ctrlAdmin->deconnecter();
      }
/*Si l'action egale  FormAjout
*L'objet appel le ctrlFormAjout pour accéder à FormAjout()
*/
      if (($_GET['action'] == 'FormAjout')){
      $this->ctrlFormAjout->FormAjout();
      }

/*Si l'action egale  chapitre
*L'objet appel le ctrlChapitres pour accéder à Chapitres()
*/
      if (($_GET['action'] == 'chapitres')){
      $this->ctrlChapitres->Chapitres();
      }

/*Si l'action egale ListeComm
*L'objet appel le ctrlListeComm pour accéder à ListeComm()
*/
      if (($_GET['action'] == 'ListeComm')){
      $this->ctrlListeComm->ListeComm();
      }

/*Si l'action egale suppr
*L'objet appel le ctrlSuppr pour accéder à suppr(récupération de l'id)
*Redirection sur la liste des billets
*/
       if (($_GET['action'] == 'suppr')){
      $this->ctrlSuppr->suppr($_GET['id']);
      header('Location:index.php?action=ListeBillet');
      }

/*Si l'action egale supprcomm
*L'objet appel le ctrlSuppr pour accéder à supprComm(récupération de l'id)
*Redirection sur la liste des commentaires
*/
      if (($_GET['action'] == 'supprComm')){
      $this->ctrlSuppr->supprComm($_GET['id']);
      header('Location:index.php?action=ListeComm');
      }
      
/*Si l'action egale à signaler
*L'objet appel le ctrlSignale pour accéder à signale(récupération de l'id)
*/
      if (($_GET['action'] == 'signaler')){
      $this->ctrlSignale->signale($_GET['id'],$_GET['idBillet']);
      }

/*Si l'action egale à modif
*L'objet appel le ctrlModif pour accéder à modif(récupération de l'id)
*/
      if (($_GET['action'] == 'modif')){
      $this->ctrlModif->modif($_GET['id']);
      }

//ModifBillet récupere le titre et le contenu entrer et appel la fonction ajoutModif qui modifie le billet dans la bdd puis renvoi a la liste des billets de l'admin
      if (($_GET['action'] == 'modifBillet')){
        $titre = $this->getParametre($_POST,'titre');
        $contenu = $this->getParametre($_POST,'contenu');
        $this->ctrlModif->ajoutModif($titre,$contenu,$_GET['id']);
        header('Location:index.php?action=ListeBillet');
      }  

      }

/*Si aucune des conditions 
*L'objet appel le ctrlAccueil pour accéder à accueil()
*/
      else { 
        $this->ctrlAccueil->accueil(); 
       
      }
    }
  
    catch (Exception $e) {
      echo ($e->getMessage());
    }
}

/*Affiche la vue Erreur
*/
  private function erreur($msgErreur) {
    $vue = new Vue("Erreur","");
    $vue->generer(array('msgErreur' => $msgErreur));
  }
}
