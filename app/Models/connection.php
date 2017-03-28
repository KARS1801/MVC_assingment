<?php
namespace Links\Models;
class connectionclass{
	public function connectionfunction(){
$server="linksaver.dev";
$user="root";
$pass="password";
$database="regform";

try
{
	$conn=new \PDO("mysql:dbname=$database;host=$server",$user,$pass);
	$conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    return $conn;}

catch(PDOException $e)
{
    echo "connection failed".$e.getMessage();
    return "error";
}

}
}
?>