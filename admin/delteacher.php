<?php
	include "../funcs/connect.php";

	$sql="DELETE FROM `teachers` WHERE `teachers`.`id` = ?"; 
	$result=$connect->prepare($sql);
	$result->bindvalue(1,$_GET["id"]);
	if($result->execute())
	{
		header("location:teacher-pro.php?ok=2020");
		exit;
	}
	else
	{
		header("location:teacher-pro.php?error=1010");
		exit;
	}	
	?>	