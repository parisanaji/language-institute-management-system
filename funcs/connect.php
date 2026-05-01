<?php
session_start();
$host="localhost";
$db="english_institute";
$username="root";
$pass="";
try
{
$connect=new PDO("mysql:host=$host;dbname=$db",$username,$pass);
$connect->query("set character set utf8");

}
catch(PDOException $error)
{
	echo "ERROR in connect to database".$error; 
}

?>