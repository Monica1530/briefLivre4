<?php
class Controller_login extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_login()
	{
		if ($_SESSION ["role"] === 1){
		header('Location: admin/?controller=home&action=home');
	}
	else {
			header('Location: user/?controller=home&action=home');
			
		}
	}
}