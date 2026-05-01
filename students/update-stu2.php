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
$address=$_GET["address"];
$sql="UPDATE `students` SET `name` = ?, `family` = ?,`age` = ?, `address`=?,`tell` =?, `username` =?, `password` = ? WHERE `students`.`id` = $id";
$result=$connect->prepare($sql);
$result->bindValue(1,$name);
$result->bindValue(2,$family);
$result->bindValue(3,$age);
$result->bindValue(5,$tell);
$result->bindValue(4,$address);
$result->bindValue(6,$user);
$result->bindValue(7,$password);
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