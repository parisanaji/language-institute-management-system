<?php
include "../funcs/connect.php";
if(isset($_GET["btnadd"]))
{
$id2=$_GET["id"];
$name2=$_GET["name"];
$family2=$_GET["family"];
$age2=$_GET["age"];
$tell2=$_GET["tell"];
$address2=$_GET["address"];
$password2=$_GET["password"];
$user2=$_GET["username"];
$degree2=$_GET["degree"];	
$sql2="INSERT INTO `english_institute`.`teachers` (`id`, `name`, `family`, `age`,`degree`,`tell`, `address`,`username`, `password`) VALUES (?,?,?,?,?,?,?,?,?);";
$result=$connect->prepare($sql2);
$result->bindValue(1,$id2);
$result->bindValue(2,$name2);
$result->bindValue(3,$family2);
$result->bindValue(4,$age2);
$result->bindValue(5,$degree2);
$result->bindValue(6,$tell2);
$result->bindValue(7,$address2);
$result->bindValue(8,$user2);
$result->bindValue(9,$password2);
$query3=$result->execute();
if($query3)
{
	header("location:teacher-pro.php?add=1010");
	exit;
}
else
{
	
header("location:teacher-pro.php?erroradd=1010");
exit;
}
}
?>