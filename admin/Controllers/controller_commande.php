<?php

class Controller_commande extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_home()
	{
		$this->render("commande");
	}
    public function action_all_commande()
        {
            $m=Model::get_model();
            $data=["commande"=>$m->get_all_commande()];
            $this->render("all_commande",$data);
        }

        public function action_all_cediteur()
        {
            $m=Model::get_model();
            $data=["cediteur"=>$m->get_all_cediteur()];
            $this->render("all_cediteur",$data);
        }

        public function action_all_cediteur_list()
        {   $id_livre = $_POST['ce'];
            $m=Model::get_model();
            $data=["cediteur_list"=>$m->get_all_cediteur_list($id_livre)];
            $this->render("all_cediteur_list",$data);
        }
        public function action_all_cfournisseur()
        {
            $m=Model::get_model();
            $data=["cfournisseur"=>$m->get_all_cfournisseur()];
            $this->render("all_cfournisseur",$data);
        }

        public function action_all_cfournisseur_list()
        {
            $id_fournisseur = $_POST['cf'];
            $m=Model::get_model();
            $data=["cfournisseur_list"=>$m->get_all_cfournisseur_list($id_fournisseur)];
            $this->render("all_cfournisseur_list",$data);
        }

        public function action_all_date()
        {
            // $date = $_POST['d'];
            $m=Model::get_model();
            $data=["date"=>$m->get_all_date()];
            $this->render("all_date",$data);
        }

        public function action_all_date_list()
        {
            $date = $_POST['d'];
            $m=Model::get_model();
            $data=["date_list"=>$m->get_all_date_list($date)];
            $this->render("all_date_list",$data);
        }

        public function action_inserer_commande(){
            $id = $_GET['titre_livre'];
            $data = ["livre" => $m->get_all_livres()];
            $this->render("inserer_commande");

    }
    public function action_traitement_inserer_commande(){
        $m = Model::get_model();
        $m->get_traitement_inserer_commande();
        $data = ["commande" => $m->get_all_commande()];
        $this->render("titre_livre", $data);
        

}
    }