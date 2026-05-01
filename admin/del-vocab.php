<?php
include "../funcs/connect.php";
$sql="delete from vocab where id=".$_GET["id"]."";
$result=$connect->query($sql);
if($result)
{
	
	header("location:upload.php");
	exit;
}
else
{
	header("location:upload.php");
	exit;
}



?>