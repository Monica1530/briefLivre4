<?php
class Controller_login extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_login()
	{
		header('Location: admin/?controller=home&action=home');
	}
}