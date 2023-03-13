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





// je crée une autre fonction pour avoir accès à fournisseur

public function get_all_fournisseur() {

    $r = $this->bd->prepare("SELECT * FROM fournisseur" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}
// je crée une fonction pour afficher les fournisseurs par raison sociale 

public function get_all_rsociale() {

    $r = $this->bd->prepare("SELECT DISTINCT Raison_sociale FROM fournisseur" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}

public function get_all_rsociale_list() {
    $raisonsociale = $_POST['rs'];
    $r = $this->bd->prepare("SELECT * FROM fournisseur WHERE Raison_sociale= '$raisonsociale'" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}

// fonction pour afficher les fournisseurs par leur localité

public function get_all_localite() {

    $r = $this->bd->prepare("SELECT Localite FROM fournisseur" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}

public function get_all_localite_list($localite) {
     
    $r = $this->bd->prepare("SELECT * FROM fournisseur WHERE Localite = '$localite'" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}
// fonction pour afficher les fournisseurs par leur pays

public function get_all_pays() {

    $r = $this->bd->prepare("SELECT Pays FROM fournisseur" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}

public function get_all_pays_list($pays) {

    $r = $this->bd->prepare("SELECT * FROM fournisseur WHERE Pays = '$pays'" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}

        public function get_all_livres() {

            $r = $this->bd->prepare("SELECT * FROM livre order by Titre" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }
        // fonction qui récupère les titres

        public function get_all_titre() {

            $r = $this->bd->prepare("SELECT Titre FROM livre " ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }  

        public function get_all_titre_list($titre) {

            $r = $this->bd->prepare("SELECT * FROM livre WHERE Titre = '$titre'" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        } 
        // fonction qui récupère les auteurs
        public function get_all_auteur() {

            $r = $this->bd->prepare("SELECT NomAuteur, PrenomAuteur FROM livre " ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }  

        public function get_all_auteur_list($auteur) {

            $r = $this->bd->prepare("SELECT * FROM livre WHERE NomAuteur = '$auteur'" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }  
        // fonction qui récupère les éditeurs
        public function get_all_editeur() {

            $r = $this->bd->prepare("SELECT Editeur FROM livre " ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }  

        public function get_all_editeur_list($editeur) {

            $r = $this->bd->prepare("SELECT * FROM livre WHERE Editeur = '$editeur' " ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        } 
        // COMMANDE
        // fonction qui récupère toute les commandes
        public function get_all_commande() {

            $r = $this->bd->prepare("SELECT livre.ISBN, livre.Titre, livre.NomAuteur, livre.PrenomAuteur, fournisseur.Raison_sociale, 
            commande.Date_achat, commande.Prix_achat, commande.Nbr_exemplaires 
            FROM commande INNER JOIN livre ON livre.id = commande.Id_livre INNER JOIN fournisseur 
            ON fournisseur.Id_fournisseur = commande.id_fournisseur " ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }  
 
public function get_all_cediteur() {

    $r = $this->bd->prepare("SELECT * FROM livre " ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}  

public function get_all_cediteur_list($id) {

    $r = $this->bd->prepare("SELECT * FROM commande 
    INNER JOIN livre ON livre.id = commande.Id_livre 
    INNER JOIN fournisseur ON fournisseur.Id_fournisseur = commande.id_fournisseur 
    WHERE commande.Id_livre = $id" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}  
public function get_all_cfournisseur() {

    $r = $this->bd->prepare("SELECT * FROM fournisseur" ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}  

public function get_all_cfournisseur_list($id) {

    $r = $this->bd->prepare("SELECT * FROM commande 
    INNER JOIN livre ON livre.id = commande.Id_livre 
    INNER JOIN fournisseur ON fournisseur.Id_fournisseur = commande.id_fournisseur 
    WHERE commande.id_fournisseur = $id " ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}  
public function get_all_date() {

    $r = $this->bd->prepare("SELECT Date_achat FROM commande " ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}  
public function get_all_date_list($Id_livre) {

    $r = $this->bd->prepare("SELECT * FROM commande 
    INNER JOIN livre ON livre.id = commande.Id_livre 
    INNER JOIN fournisseur ON fournisseur.Id_fournisseur = commande.id_fournisseur 
    WHERE commande.Date_achat = $Id_livre  " ) ;
    $r->execute() ;

    return $r->fetchAll(PDO::FETCH_OBJ) ;

}  

public function get_traitement_inserer_livre() {

    $isbn = $_POST['number'];
    $titre = $_POST['titre'];
    $theme = $_POST['theme'];
    $nbPages = $_POST['pages'];
    $format = $_POST['format'];
    $nomAuteur = $_POST['nom'];
    $prenomAuteur = $_POST['prenom'];
    $editeur = $_POST['editeur'];
    $anneeEdition = $_POST['annee'];
    $prix = $_POST['prix'];
    $langue = $_POST['langue'];
    $requete = $this->bd->prepare("INSERT INTO `livre`(`ISBN`, `Titre`, `Theme`, `Nb_pages`, `Format`, `NomAuteur`, `PrenomAuteur`, `Editeur`, `AnneeEdition`, `Prix`, `Langue`) 
    VALUES (':isbn','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')") ;
    
    
    $requete->bindValue(':isbn', $isbn);
   $requete->bindValue(':titre',$titre);
   $requete->bindValue(':theme', $theme);
   $requete->bindValue(':nbpages', $nbPages);
   $requete->bindValue(':format', $format);
   $requete->bindValue(':nomauteur', $nomAuteur);
   $requete->bindValue(':prenomauteur', $prenomAuteur);
   $requete->bindValue(':editeur', $editeur);
   $requete->bindValue(':anneeedition', $anneeEdition);
   $requete->bindValue(':prix', $prix);
   $requete->bindValue(':langue', $langue);
   
    $requete->execute() ;

    return $requete->fetchAll(PDO::FETCH_OBJ) ;

}
}   
    // Fin de la Classe