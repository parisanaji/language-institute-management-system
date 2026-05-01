<?php
include "../funcs/connect.php";
if(isset($_GET["btnvocab"]))
{
	$fa=$_GET["fa"];
	$en=$_GET["en"];
	$type=$_GET["type"];
	$sql2="INSERT INTO `vocab` (`id`, `en`, `fa`, `type`) VALUES (NULL,?,?,?)";
	$result2=$connect->prepare($sql2);
	$result2->bindValue(1,$en);
	$result2->bindValue(2,$fa);
	$result2->bindValue(3,$type);
	$query=$result2->execute();
	if($query)
	{
		header("location:upload.php?addv=1010");
		exit();
	}
	else
	{
		header("location:upload.php?naddv=1010");
		exit();
	}
	

}
else
{
	header("location:upload.php");
	exit;
}
?>