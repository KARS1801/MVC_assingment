<?php
namespace Links\Models;
require 'connection.php';
use Links\Models\connectionclass;
class Links extends connectionclass
{
	public function addlink($link1)
	{
		session_start();
		$user=$_SESSION["user"];
		$query="insert into linktable (username,links) values ('$user','$link1')";

		$con=connectionclass::connectionfunction();
		$result=$con->prepare($query);
        $result->execute();

        if($result)
        {return true;}
        else
        {return false;}
	}

	public function showlink()
	{
		session_start();
		$user=$_SESSION["user"];
		$query1="select links from linktable where username='$user'";
		$con=connectionclass::connectionfunction();
        $result1=$con->prepare($query1);
        $result1->execute();

        $links=$result1->fetchALL();
        return $links;

	}
}


?>