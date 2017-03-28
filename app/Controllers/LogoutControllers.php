<?php
namespace Links\Controllers;

class LogoutControllers extends ViewControllers{
	public function post(){
            session_start();
			session_destroy();
			this->render("Home.html");
	}

	public function get(){
session_start();
			session_destroy();
			this->render("Home.html");	}
}

?>