<?php
include "../funcs/connect.php";
if (isset($_GET["btnup"])){
$id5=$_GET["id"];
$name5=$_GET["name"];
$family5=$_GET["family"];
$age5=$_GET["age"];
$degree5=$_GET["degree"];
$tell5=$_GET["tell"];
$address5=$_GET["address"];
$password5=$_GET["password"];
$user5=$_GET["username"];
$sql4="UPDATE `english_institute`.`teachers` SET `name` = ?, `family` = ?,`age` = ?,`degree` = ?,`tell` =?, `address` =?,`username` =?,`password` = ? WHERE `teachers`.`id` = $id5 ";
$result=$connect->prepare($sql4); 
$result->bindValue(1,$name5);
$result->bindValue(2,$family5);
$result->bindValue(3,$age5);
$result->bindValue(4,$degree5);
$result->bindValue(5,$tell5);
$result->bindValue(6,$address5);
$result->bindValue(7,$user5);
$result->bindValue(8,$password5);
$query4=$result->execute();
if($query4)
{
	header("location:teacher-pro.php?update=1010");
	exit;
}
else
{
	
	header("location:teacher-pro.php?errorupdate=1010");
	exit;
}
}
?>