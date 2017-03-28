<?php

namespace Links\Models;
require 'connection.php';
use Links\Models\connectionclass;

class Users extends connectionclass {
	public function adduser($data1=[]){
		$username=$data1["username"];
        $password=$data1["password"];
		$contact=$data1["contact"];

		$con=connectionclass::connectionfunction();

		$query1="insert into usersinfo (username,contact,password) values ('$username','$contact','$password')";
		$result1=$con->prepare($query1);
        $result1->execute();
		if(!(empty($result1)))
		{
			echo "User added succesfully";
			header("location:/login");
			return true;
		}
		else{
			echo "error adding user";
            return false;
		}
	}

	public function checkuser($data2=[]){
		$username=$data2["username"];
        $password=$data2["password"];
$con=connectionclass::connectionfunction();
		$query2="select * from usersinfo where username='$username' and password='$password'";
		$result2=$con->prepare($query2);
		$result2->execute();

		$result2=$result2->fetchALL();

		if(!(empty($result2)))
		{
		
			return true;
		}

		else
		{
			
			return false;
		}
	}
} 

?>