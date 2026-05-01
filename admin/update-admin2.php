<?php
include "../funcs/connect.php";
if (isset($_GET["btnup"])){
$id=$_GET["id"];
$name=$_GET["name"];
$family=$_GET["family"];
$age=$_GET["age"];
$tell=$_GET["tell"];
$password=$_GET["password"];
$user=$_GET["username"];
$email=$_GET["email"];
$degree=$_GET["degree"];
$sql="UPDATE `admin` SET `name` = ?, `family` = ?,`degree`=?,`age` = ?, `email`=?, `username` =?, `password` = ?,`tell` =? WHERE `admin`.`id` = $id";
$result=$connect->prepare($sql);
$result->bindValue(1,$name);
$result->bindValue(2,$family);
$result->bindValue(3,$degree);
$result->bindValue(4,$age);
$result->bindValue(5,$email);
$result->bindValue(6,$user);
$result->bindValue(7,$password);
$result->bindValue(8,$tell);
$query=$result->execute();
if($query)
{
	header("location:self-pro.php?id=$id&update=2020");
	exit;
}
else
{
	header("location:self-pro.php?id=$id&errorupdate=1010");
	exit;
}
}
?>