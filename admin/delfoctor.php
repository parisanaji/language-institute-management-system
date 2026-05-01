<?php
include "../funcs/connect.php";
$sql="DELETE FROM `shahriye` WHERE `shahriye`.`id` = ".$_GET["id"]."";
$result=$connect->query($sql);
if($result)
{
	header("location:financial.php?del=1010");
	exit;
}
else
{
	header("location:financial.php?nodel=1010");
	exit;

}

?>