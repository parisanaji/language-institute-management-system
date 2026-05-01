<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پیام ها</title>
<style type="text/css">
body
{
	font-family:"B Homa" !important;
	align:center !important;
}
#reply
{
	border:solid rgba(114,104,104,1.00) 2px;
	border-radius:5px;
}
</style>
<center>
<br>
<br>
<?php
if(isset($_GET["ok"]))
{
	echo "<div id=prompt><font color=#00CC33>"."پیام مورد نظر حذف شد"."</font></div>";
}
if(isset($_GET["error"]))
{
	echo "<div id=prompt><font color=#00CC33>"."حذف انجام نشد"."</font></div>";
}
if(isset($_GET["reply"]))
{
	echo "<div id=prompt><font color=#00CC33>"."پاسخ ارسال شد"."</font></div>";
}
if(isset($_GET["replyno"]))
{
	echo "<div id=prompt><font color=#00CC33>"."خطا در ارسال پاسخ"."</font></div>";
}

?>
</center>
</head>
<body>
<div class="container">
<div class="row" align="right">
<font color="#635F5F"><label >پیام های دریافت شده</label></font><img src="../pic/20171120_00_24_43.jpeg" width="100" height="85"/>
<table class="table table-striped table-bordered table-hover table-condensed"  cellspacing="10px">
<tr class="info" id="table">
<td>ردیف</td>
<td>فرستنده</td>
<td>عنوان</td>
<td>متن پیام</td>
<td class="alert-danger">حذف پیام</td>
</tr>
<?php
include "../funcs/connect.php";
$radid=1;
$sql2="SELECT * FROM `admin` WHERE id=?";
$result=$connect->prepare($sql2);
$result->bindValue(1,$_GET["id"]);
$result->execute();
foreach($result as $rows)
{
$sql="SELECT * FROM `message` WHERE `reciever`=?";
$result2=$connect->prepare($sql);
$result2->bindValue(1,$rows["family"]);
$result2->execute();
foreach($result2 as $rows2)
{
	$sql3="SELECT * FROM `teachers` WHERE `id`=?";
	$result3=$connect->prepare($sql3);
	$result3->bindValue(1,$rows2["sendid"]);
	$result3->execute();
	foreach($result3 as $rows3)
{
	echo"<tr>";
	echo "<td>$radid</td>";
	echo "<td>".$rows3["name"].".".$rows3["family"]."</td>";

	echo "<td>".$rows2["onvan"]."</td>";
	echo "<td>".$rows2["matn"]."</td>";
	echo "<td><a href=delmessage.php?id=".$rows2["id"]."&sendid=".$_GET["id"]."><img src=../pic/Untitled-2.png width=20 height=20/></a></td>";
	echo"</tr>";
	$radid++;
	}
}
}
echo "</table>";
?>
</div>
</div><!-----col-lg-6----->

</div>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>