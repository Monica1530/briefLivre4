<?php
class Controller_login extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_login()
	{
		$m=Model::get_model();
		$data=["login"=>$m->get_login()];
		$this->render("login",$data);
	}

	
}