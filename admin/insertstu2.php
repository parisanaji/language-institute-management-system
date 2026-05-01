<?php
include "../funcs/connect.php";
if(isset($_GET["btnadd"]))
{
$id1=$_GET["id"];
$name1=$_GET["name"];
$family1=$_GET["family"];
$age1=$_GET["age"];
$tell1=$_GET["tell"];
$address1=$_GET["address"];
$password1=$_GET["password"];
$user1=$_GET["username"];
$sql2="INSERT INTO `english_institute`.`students` (`id`, `name`, `family`, `age`, `address`, `tell`, `username`, `password`) VALUES (?,?,?,?,?,?,?,?)";
$result=$connect->prepare($sql2);
$result->bindValue(1,$id1);
$result->bindValue(2,$name1);
$result->bindValue(3,$family1);
$result->bindValue(4,$age1);
$result->bindValue(5,$address1);
$result->bindValue(6,$tell1);
$result->bindValue(7,$user1);
$result->bindValue(8,$password1);
$query2=$result->execute();
if($query2)
{
	
	header("location:stu-pro.php?add=1010");
	exit;
}
else
{
	 
	header("location:stu-pro.php?erroradd=1010");
	exit;
}
}
?>