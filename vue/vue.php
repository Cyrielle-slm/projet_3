<?php

class Vue {
/*
*Nom du fichier associé à la vue 
*Titre de la vue
*/
    private $fichier;
    private $titre;


/*Constructeur
*Détermine le fichier de la vue à partir de l'action
*/
    public function __construct($action,$gab){
        $this->fichier= "vue/vue" .$action .".php";
        $this->gabarit= "vue/" .$gab .".php";
       
    }
/*
*Génére la partie spécifique de la vue
*Génére la gabarit commun avec la partie spécifique
*Renvoi le resultat de la vue
*/
    public function generer($donnees){
        $contenu = $this->genererFichier($this->fichier,$donnees);
        $vue= $this->genererFichier($this->gabarit,array('titre'=>$this->titre,'contenu'=>$contenu)); 
        echo $vue; 

    }
/*
*Générele fichier vue
*Vérifie l'existance du fichier
*Elements de données accéssiblé à la vue
*Démarrage de temporisation de sortie
*Inclut le fichier vue et place son resulat dans le tampon de sortie
*Envoi et arrêt du tampon de sortie
*Sinon msg erreur
*/
    public function genererFichier($fichier,$donnees){
        if(file_exists($fichier)){
            extract($donnees);
            ob_start(); 
            require $fichier; 
            return ob_get_clean();
        }
    
        else{
            throw new Exception("Fichier" .$fichier. "introuvable");         
        }
    }
}

