<?php


namespace Links\Controllers;
use Links\Models\Users;


class LoginControllers extends ViewControllers{
	public function post(){
		
		 $username=$_POST['username'];
		  $password=$_POST['password'];

		  $data=['username'=>$username,'password'=>$password];

		  $check=Users::checkuser($data);

		  if(!$check)
		  {
		  	
		  	$this->render("Home.html");
		  }
		  else
		  {
		  	session_start();
						$_SESSION["user"]=$username;
						
						$this->render("dashboard.html");
		  }

		

		 

		}


public function get() {
			header("location:/");
		}

}

