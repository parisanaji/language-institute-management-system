<?php
include "../funcs/connect.php";
if(isset($_GET["btn"]))
{
	$teachername=$_GET["teachername"];
	$stuid=$_GET["stu-id"];
	$examdate=$_GET["date"];
	$point=$_GET["point"];
	$course=$_GET["course"];
	$sql="INSERT INTO `course` (`id`, `stuid`, `course`, `examDate`, `point`, `teacherName`) VALUES (NULL, ?, ?, ?, ?, ?)";
	$result=$connect->prepare($sql);
	$result->bindValue(1,$stuid);
	$result->bindValue(2,$course);
	$result->bindValue(3,$examdate);
	$result->bindValue(4,$point);
	$result->bindValue(5,$teachername);
	$query=$result->execute();
	if($query)
	{
	header("location:points.php?add=1010&id=".$_GET["id"]."");
	exit;	
	}
	else
	{
	header("location:points.php?error=1010&id=".$_GET["id"]."");
	exit;
	}
}
else
{
	header("location:points.php?");
	exit;
}


?>