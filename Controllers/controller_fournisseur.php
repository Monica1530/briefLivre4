<?php

class Controller_fournisseur extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_home()
	{
		$this->render("fournisseur");
	}
    public function action_all_fournisseur()
        {
            $m=Model::get_model();
            $data=["fournisseur"=>$m->get_all_fournisseur()];
            $this->render("all_fournisseur",$data);
        }

		// fonction pour la raison sociale
		public function action_all_rsociale()
        {
            $m=Model::get_model();
            $data=["Raison_sociale"=>$m->get_all_rsociale(), 'position' => 1 ];
            $this->render("all_rsociale",$data);
        }

        public function action_all_rsociale_list()
        {
            $raisonsociale = $_POST['rs'];
            $m=Model::get_model();
            $data=["Raison_sociale_list"=>$m->get_all_rsociale_list(), $m->get_all_rsociale(), 'position' => 2];
            $this->render("all_rsociale_list",$data);
        }
    // fonction pour afficher la localité
	public function action_all_localite()
        {
            $m=Model::get_model();
            $data=["localite"=>$m->get_all_localite()];
            $this->render("all_localite",$data);
        }
// fonction bis de la localité
public function action_all_localite_list()
        {$localite = $_POST['l'];
            $m=Model::get_model();
            $data=["localite_list"=>$m->get_all_localite_list($localite)];
            $this->render("all_localite_list",$data);
        }

		// fonction pour afficher le pays
		public function action_all_pays()
        {
            $m=Model::get_model();
            $data=["pays"=>$m->get_all_pays()];
            $this->render("all_pays",$data);
        }

        public function action_all_pays_list()
        {
            $pays = $_POST['p'];
            $m=Model::get_model();
            $data=["pays_list"=>$m->get_all_pays_list($pays)];
            $this->render("all_pays_list",$data);
        }

}

?>