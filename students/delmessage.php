<?php
	include "../funcs/connect.php";
	$sendid=$_GET["sendid"];
	$sql="DELETE FROM `message` WHERE `message`.`id` = ?"; 
	$result=$connect->prepare($sql);
	$result->bindvalue(1,$_GET["id"]);
	if($result->execute())
	{
		header("location:messages.php?ok=2020&id=$sendid");
		exit;
	}
	else
	{
		header("location:messages.php?error=1010id=$sendid");
		exit;
	}	
	?>	