<?php
include "../funcs/connect.php";
$sql="delete from nashriyat where id=".$_GET["id"]."";
$result=$connect->query($sql);
if($result)
{
	unlink($_SESSION["pic"]);
	header("location:upload.php");
	exit;
}
else
{
	header("location:upload.php");
	exit;
}



?>