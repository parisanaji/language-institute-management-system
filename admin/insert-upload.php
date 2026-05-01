<?php
include "../funcs/connect.php";
if(isset($_POST["btnmaghale"]))
{
	$title=$_POST["title"];
	$matnfa=$_POST["matnfa"];
	$matnen=$_POST["matnen"];
	$image=$_FILES["ax"]["name"];
	$imaPOSTmp=$_FILES["ax"]["tmp_name"];
	$type=$_FILES["ax"]["type"];
	$ext=array("image/jpeg","image/jpg","image/png","image/gif");
	if (in_array($type,$ext)){
	$filename=md5($image.microtime()).substr($image,-5,5);
	$loc="../nashriyat/pic/".$filename;
	$move=move_uploaded_file($imaPOSTmp,"../nashriyat/pic/".$filename);
	}
	$sql="INSERT INTO `nashriyat` (`id`, `onvan`, `matnfarsi`, `matnlatin`, `photo`) VALUES (NULL, ?, ?, ?, ?)";
	$result=$connect->prepare($sql);
	$result->bindValue(1,$title);
	$result->bindValue(2,$matnfa);
	$result->bindValue(3,$matnen);
	$result->bindValue(4,$filename);
	$query=$result->execute();
	if($query)
	{
		$_SESSION["pic"]=$loc;
		header("location:upload.php?addm=1010");
		exit();
	}
	else
	{
		header("location:upload.php?naddm=1010");
		exit();
	}
	
}
else
{
	header("location:upload.php");
	exit;
}

?>