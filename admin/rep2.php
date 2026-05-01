<?php
include "../funcs/connect.php";
if(isset($_GET["btnsend"]))
{
$onvan="پاسخ";
$reciever=$_GET["reciever"];
$matn=$_GET["matn"];
$sendid=$_GET["send"];
$sql2="INSERT INTO `message` (`id`, `sendid`, `reciever`, `matn`, `onvan`,`type`) VALUES (NULL, ?, ?, ?, ?,?)";
$result2=$connect->prepare($sql2);
$result2->bindValue(1,$sendid);
$result2->bindValue(2,$reciever);
$result2->bindValue(3,$matn);
$result2->bindValue(4,$onvan);
$result2->bindValue(5,"اساتید");
$query=$result2->execute();
if($query)
{
	header("location:message.php?id=$sendid&reply=1111");
	exit;
}
else
{
	header("location:message.php?id=$sendid&replyno=2222");
	exit;
}

}
?>