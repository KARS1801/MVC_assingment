<?php

namespace Links\Controllers;

class HomeControllers extends ViewControllers

{
	public function get(){
		$this->render("Home.html");
	}

	public function post(){
		if (isset($_POST['log_button']))
		{
			$this->render("login.html");
		}

		if (isset($_POST['reg_button']))
		{
			$this->render("register.html");
		}
	}
}





?>