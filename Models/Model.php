<?php

    class Model 
    {   // Début de la Classe

        private $bd ;
        
        private static $instance = null ;

        
          //Constructeur créant l'objet PDO et l'affectant à $bd
         
        private function __construct() {  // Fonction qui sert à faire le lien avec la BDD

            $dsn = "mysql:host=localhost;dbname=bdp5"  ;   // Coordonnées de la BDD
            $login = "root" ;   // Identifiant d'accès à la BDD
            $mdp = "" ; // Mot de passe d'accès à la BDD
            $this->bd = new PDO($dsn, $login, $mdp) ;
            $this->bd->query("SET NAMES 'utf8'") ;
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

        }


        // get_model()

        public static function get_model() {    // Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
            if (is_null(self::$instance))
            {
                self::$instance = new Model() ;
            }
            return self::$instance ;
        }


//fonction pour l'inscription
public function get_inscription(){
    // Je récupère les données du formulaire d'inscription
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ident = $_POST['ident'];
    $mdp = $_POST['pass'];
    $mpd2 = $_POST['pass2'];

    // je vérifie si les informations sont captées
    echo $nom . " " . $prenom . " " . $ident . " " . $mdp . " " . $mpd2;

    // if ($mdp == $mdp2) {
    //     echo "mot de pass identique";
    // } else {
    //     echo "Le mot de pass ne correspond pas";
    // }
    // j'insère les données du formulaire d'inscription dans la base de donnée 
    $requete = $this->bd->prepare("INSERT INTO user( Nom, Prenom, Identifiant, Mdp) VALUES (:nom,:prenom,:identifiant,:mdp)");
    
        $requete->bindValue(':nom', $nom);
        $requete->bindValue(':prenom', $prenom);
        $requete->bindValue(':identifiant', $ident);
        $requete->bindValue(':mdp', $mdp);
        $requete->execute();

    //     public function get_sign_up_user()
    // {
    //     $nom = $_POST['nom'];
    //     $prenom = $_POST['prenom'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $r = $this->bd->prepare("INSERT INTO users(nom, prenom, mail, password) 
    //     VALUES (:nom,:prenom,:email,:pass)");
    //     $r->bindParam(':nom', $nom);
    //     $r->bindParam(':prenom', $prenom);
    //     $r->bindParam(':email', $email);
    //     $r->bindParam(':pass', $password);
    //     $r->execute();
    // }
    }

}   
    // Fin de la Classe