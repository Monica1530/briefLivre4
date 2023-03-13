
<?php
class Controller_inscription extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_page_inscription()
	{
		$this->render("inscription");
	}
public function action_inscription()
    {

        
    if ('POST' === $_SERVER['REQUEST_METHOD']) {
        // echo 'Formulaire soumis';

        // var_dump($_POST);
        // extraire les données pour les utiliser

        extract($_POST);

        // on vérifie si les inputs sont vides
    
        if (empty($nom) || empty($prenom) || empty($ident) || empty($pass) || empty($pass2)) {
            echo 'Certains champs sont vides';

            exit;
        }
        $nom = trim(htmlspecialchars($nom));
        $prenom = trim(htmlspecialchars($prenom));
        $pass = trim($pass);
        $pass2 = trim($pass2);


        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_inscription();
            $this->render("home");
        } else {
            $this->render("inscription");
        }
    }
}
}

        