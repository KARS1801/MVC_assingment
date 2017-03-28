<?php

namespace Links\Controllers;
use Links\Models\Users;

class RegisterControllers extends ViewControllers

{
	public function post(){
    
  
     $username=$_POST['username'];
     $password=$_POST['password'];
     $confpassword=$_POST['confpassword'];
     $contact=$_POST['contact'];

     $data=['username'=>$username,'password'=>$password,'confpassword'=>$confpassword,'contact'=>$contact];



     if (true){
       $user=Users::adduser($data);
       if ($user){header("location:/");}
       else{echo "sorry user cant be added";}
     }
     else{
      $this->render("Home.html");
    }
  

  


}

public function get() {
 header("location:/");
}
}
?>