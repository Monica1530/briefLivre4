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
            $data=["commande"=>$m->get_all_cediteur()];
            $this->render("all_cediteur",$data);
        }

        public function action_all_cfournisseur()
        {
            $m=Model::get_model();
            $data=["commande"=>$m->get_all_cfournisseur()];
            $this->render("all_cfournisseur",$data);
        }

        public function action_all_date()
        {
            $m=Model::get_model();
            $data=["commande"=>$m->get_all_date()];
            $this->render("all_date",$data);
        }
    }