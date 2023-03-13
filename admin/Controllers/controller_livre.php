<?php

class Controller_livre extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_home()
	{
		$this->render("livre");
	}

    public function action_all_livres()
        {
            $m=Model::get_model();
            $data=["livres"=>$m->get_all_livres()];
            $this->render("all_livres",$data);
        }

		public function action_all_titre()
        {
            $m=Model::get_model();
            $data=["titre"=>$m->get_all_titre()];
            $this->render("all_titre",$data);
        }
        public function action_all_titre_list()
        {$titre = $_POST['t'];
            $m=Model::get_model();
            $data=["titre_list"=>$m->get_all_titre_list($titre)];
            $this->render("all_titre_list",$data);
        }

		public function action_all_auteur()
        {
            $m=Model::get_model();
            $data=["auteur"=>$m->get_all_auteur()];
            $this->render("all_auteur",$data);
        }

        public function action_all_auteur_list()
        {
            $auteur = $_POST['a'];
            $m=Model::get_model();
            $data=["auteur_list"=>$m->get_all_auteur_list($auteur)];
            $this->render("all_auteur_list",$data);
        }

		public function action_all_editeur()
        {
            $m=Model::get_model();
            $data=["editeur"=>$m->get_all_editeur()];
            $this->render("all_editeur",$data);
        }

        public function action_all_editeur_list()
        {
            $editeur = $_POST['e'];
            $m=Model::get_model();
            $data=["editeur_list"=>$m->get_all_editeur_list($editeur)];
            $this->render("all_editeur_list",$data);
        }



    public function action_inserer_livre(){


            $this->render("inserer_livre");

    }
    public function action_traitement_inserer_livre(){
        $m = Model::get_model();
        $m->get_traitement_inserer_livre();
        // $data = ["add_livre" => $m->get_add_livre(),"position" => 1];
        $data = ["livres" => $m->get_all_livres()];
        $this->render("all_livres", $data);
        

}
}
// header("Location:?controller=home&action=home");




?>