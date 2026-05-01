<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پاسخ به پیام </title>
</head>
<style type="text/css">
body
{
	font-family:"B Homa" !important;
}
</style>
<?php
include "../funcs/connect.php";

?>
<body>
<div class=" container">
<form class="form-group" method="get" action="rep2.php">
<?php

$sql="SELECT * FROM `message` WHERE `message`.`id` = ?";
$result=$connect->prepare($sql);
$result->bindvalue(1,$_GET["id"]);
$result->execute();
foreach($result as $rows)
{
	echo "<br>";
	echo "<center><label>پاسخ به پیام </label></center>";
	echo "<label><font color=#095178>عنوان پیام </font></label><label type=text class=form-control form-group >".$rows["onvan"]."</label>";
	echo "<br>";
	echo "<label><font color=#095178>متن پیام </font></label><label type=text class=form-control form-group>".$rows["matn"]." </label>";
$sql2="SELECT family FROM `students` WHERE `students`.`id` = ".$rows["sendid"]."";
$result2=$connect->query($sql2);
foreach($result2 as $rows2)
{
	echo "<label><font color=#095178>فرستنده </font></label><input type=text class=form-control form-group name=reciever id=reciever value=".$rows2["family"].">";
	echo "<br>";
	echo "<label><font color=#095178>کد گیرنده پیام </font></label><input type=text class=form-control form-group name=send id=send value=".$_GET["sendid"].">";
}
	echo "<br>";
	echo "<label><font color=#095178>پاسخ شما</font></label><textarea class=form-control form-group id=matn name=matn></textarea>";
	echo "<br>";
	echo "<center><input type=submit id=btnsend name=btnsend value=ارسال پاسخ  class=btn-danger></center>";
	
}

?>
</form>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>