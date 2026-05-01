<?php
include "../funcs/connect.php";
if(isset($_GET["btneditmaghale"]))
{
	
$onvan=$_GET["title"];
$matnfa=$_GET["matnfa"];
$matnen=$_GET["matnen"];
 $ax=$_GET["photo"];
 $id=$_GET["id"];
$sql="UPDATE `nashriyat` SET `onvan` =?,`matnfarsi` =?,`matnlatin` =?,`photo` =? where `nashriyat`.id=$id";
$result=$connect->prepare($sql);
$result->bindValue(1,$onvan);
$result->bindValue(2,$matnfa);
$result->bindValue(3,$matnen);
$result->bindValue(4,$ax);
$query=$result->execute();
if($query)
{
		

	header("location:upload.php?editokm=1010");
	exit;
}
else
{
		

	header("location:upload.php?noeditm=1010");
	exit;
}
}
else 
{
		

	header("edit.upload.php?id=".$_GET["id"]."");
	exit;
	
}


?>