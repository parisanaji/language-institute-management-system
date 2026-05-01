<?php
include "../funcs/connect.php";
$sql="delete from videos where id=".$_GET["id"]."";
$result=$connect->query($sql);
if($result)
{
	unlink($_SESSION["video"]);
	header("location:upload.php");
	exit;
}
else
{
	header("location:upload.php");
	exit;
}



?>