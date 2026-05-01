<?php
	include "../funcs/connect.php";

	$sql="DELETE FROM `students` WHERE `students`.`id` = ?"; 
	$result=$connect->prepare($sql);
	$result->bindvalue(1,$_GET["id"]);
	if($result->execute())
	{
		header("location:stu-pro.php?ok=2020");
		exit;
	}
	else
	{
		header("location:stu-pro.php?error=1010");
		exit;
	}	
	?>	