<?php
include "../funcs/connect.php";
if(isset($_POST["btnvideo"]))
{
	
	$title=$_POST["title"];
	$image=$_FILES["file"]["name"];
	$imaPOSTmp=$_FILES["file"]["tmp_name"];
	$type=$_FILES["file"]["type"];
	$filename=md5($image.microtime()).substr($image,-5,5);
	$loc="../english_videos/videos/".$filename;
	$move=move_uploaded_file($imaPOSTmp,"../english_videos/videos/".$filename);
	$sql="INSERT INTO `videos` (`id`, `name`, `title`) VALUES (NULL, ?, ?)";
	$result=$connect->prepare($sql);
	$result->bindValue(1,$filename);
	$result->bindValue(2,$title);
	$query=$result->execute();
	if($query)
	{
		$_SESSION["video"]=$loc;
		header("location:upload.php?videook=1010");
		exit;
		
	}
	else
	{
		header("location:upload.php?videonok=1010");
		exit;

	}

}
else
{
header("location:upload.php");
exit;

}

?>