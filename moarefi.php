<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>معرفی اساتید</title>
<style type="text/css">
body
{
	font-family:"B Homa";
	color:rgba(78,64,64,1.00);
}
</style>
</head>
<body>
<em>

<?php
include "funcs/connect.php";
$sql="select * from teachers where id=".$_GET["id"]."";
$result=$connect->query($sql);
foreach($result as $rows)
{
	echo "<br>";
	echo "<center><font size=-1>نام و نام خانوادگی:";
	echo "<font color=#040527 size=+1>".$rows["name"].".".$rows["family"]."</font>";
	echo "<br>";
	
	echo " مدرک تحصیلی:"."<font color=#040527 size=+1>".$rows["degree"]."</font>";
	echo "<br>";
	echo "اطلاعات تماس:"."<font color=#040527 size=+1>".$rows["tell"]."</font>";
	echo "<br></font>";
	echo "<br>";
}
?>
</em>
</body>
</html>