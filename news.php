<html>
<head>
<style type="text/css">
body
{
	font-family:"B Homa"!important;
	text-align:right;
	direction:rtl;
	font-size:18px;
}
</style>
</head>
<body>
<?php
include "funcs/connect.php";
$sql="select * from news where id=".$_GET["id"]."";
$result=$connect->query($sql);
foreach($result as $rows)
{
	echo "<font color=red>".$rows["onvan"]."</font>";
	echo "<br>";
	echo "<font face=B Homa dir=rtl >".$rows["matn"]."</font>";
}

?>

</body>
</html>