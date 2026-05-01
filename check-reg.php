<?php
include "funcs/connect.php";
include "funcs/func.php";
$name=$_FILES["file"]["name"];
$type=$_FILES["file"]["type"];
$size=$_FILES["file"]["size"];
$tmp=$_FILES["file"]["tmp_name"];
 $fname=$_POST["name"];

 $lname=xss($_POST["family"]);

 $ttavalod=xss($_POST["ttavalod"]);

 $sex=xss($_POST["sex"]);

 $melicode=xss($_POST["melicode"]);

 $city=xss($_POST["city"]);

 $email=xss($_POST["email"]);

 $celphone=xss($_POST["celphone"]);
 
 $phone=xss($_POST["phone"]);
 
 $degree=xss($_POST["degree"]);

 $year=xss($_POST["year"]);
 
 $courses=xss($_POST["courses"]);
 
  $regcode=captcha();
if(isset($_POST["reg-btn"]))
{
	if(empty($_POST["name"]) || empty($_POST["family"]) ||empty($_POST["ttavalod"]) ||empty($_POST["sex"]) ||empty($_POST["melicode"]) ||empty($_POST["city"]) ||empty($_POST["phone"]) ||empty($_POST["degree"]) ||empty($_POST["courses"]))
	{
		header("location:register.php?empty=1010");
		exit;	
	}
	else
	{
	
			$ext=array("image/jpeg","image/jpg","image/png","image/gif");
			if(in_array($type,$ext))
			{
				$filename=md5($name.microtime()).substr($name,-5,5);
				$move=move_uploaded_file($tmp,"pic-stu/".$filename);
				 $ax=$filename;
				
			}
$sql="INSERT INTO `reg` (`id`, `name`, `family`, `ttavalod`, `sex`, `melicode`, `ostan`, `email`, `celphone`, `phone`, `degree`, `year`, `courses`, `reg-code`, `photo`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?);";
	$result=$connect->prepare($sql);
	$result->bindValue(1,$fname);
	$result->bindValue(2,$lname);
	$result->bindValue(3,$ttavalod);
	$result->bindValue(4,$sex);
	$result->bindValue(5,$melicode);
	$result->bindValue(6,$city);
	$result->bindValue(7,$email);
	$result->bindValue(8,$celphone);
	$result->bindValue(9,$phone);
	$result->bindValue(10,$degree);
	$result->bindValue(11,$year);
	$result->bindValue(12,$courses);
	$result->bindValue(13,$regcode);
	$result->bindValue(14,$ax);
	$natije=$result->execute();
	if($natije)
	{
		header("location:register.php?add=1010&reg-code=$regcode");
		exit;
	}
	else
	{
		header("location:register.php?erroradd=1010");
		exit;
	}
	
		
	}
	
}

else
{
	header("location:register.php");
	exit;
	
}



?>