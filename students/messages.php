<!DOCTYPE html>
<html>
<head>

<title>پیام ها</title>
<style type="text/javascript">
body 
{
	font-family:"B Homa";
	font-size:9px !important;
}
.check
{
	background:rgba(252,252,252,1.00);
	float:left;
	width:100px;
	height:100px;
	border-radius:20px;
	margin-right:10px;
}
</style>
</head>
<?php
include "../funcs/connect.php";
if(isset($_POST["send-btn"]))
{
if (empty($_POST["girande"]) || empty($_POST["matn"]))
{
	echo '<center><font face="B Homa" size="+1" color="#CF0A0D">کادرها خالی است </font></center>';
}
else
{
	$onvan=$_POST["title"];
	$girande=$_POST["girande"];
	$matn=$_POST["matn"];
	$sendid=$_GET["id"];
	$sql="INSERT INTO `message` (`id`, `sendid`, `reciever`, `matn`, `onvan`,`type`) VALUES (NULL,?,?
	,?,?,?)";
	$result=$connect->prepare($sql);
	$result->bindValue(1,$sendid);
	$result->bindValue(2,$girande);
	$result->bindValue(3,$matn);
	$result->bindValue(4,$onvan);
	$result->bindValue(5,"اساتید");
	$query3=$result->execute();
	if($query3)
	{
		echo '<center><font face="B Homa" size="+1" color="green">پیام ارسال شد </font></center>';
	}
	else
	{
		echo '<center><font face="B Homa" size="+1" color="#CF0A0D">متاسفانه پیام ارسال نشد </font></center>';
	}
}
}
?>

<body>
<div class="container">
<div class="row" align="right">
<img src="../pic/20171120_00_24_43.jpeg" width="100" height="80"><br><font face="B Homa" size="+1">
<font face="B Homa"  color="#888585">پیام های دریافت شده</font><br><br>
<table class="table table-striped table-bordered table-hover table-condensed"  cellspacing="10px">
<tr class="info" id="table">
<td>ردیف</td>
<td>فرستنده</td>
<td>عنوان</td>
<td>متن پیام</td>
<td class="alert-danger">حذف پیام</td>
</tr>
<?php
$radif2=1;
$sql2="SELECT * FROM `students` WHERE `students`.id=?";
$result2=$connect->prepare($sql2);
$result2->bindValue(1,$_GET["id"]);
$result2->execute();
foreach($result2 as $rows2)
{
$sql5="SELECT * FROM `message` WHERE `message`.reciever=?";
$result5=$connect->prepare($sql5);
$result5->bindValue(1,$rows2["family"]);
$result5->execute();
foreach($result5 as $rows3)
{
	echo"<tr>";
	echo "<td>$radif2</td>";
$sql3="SELECT * FROM `teachers` WHERE `teachers`.id=?";
$result6=$connect->prepare($sql3);
$result6->bindValue(1,$rows3["sendid"]);
$result6->execute();
foreach($result6 as $rows4)
{
	echo "<td>استاد.".$rows4["family"]."</td>";
}
	echo "<td>".$rows3["onvan"]."</td>";
	echo "<td>".$rows3["matn"]."</td>";
	echo "<td><a href=delmessage.php?id=".$rows3["id"]."&sendid=".$_GET["id"]."><img src=../pic/Untitled-2.png width=20 					height=20/></a></td>";
	echo"</tr>";
	$radif2++;
}

}
?>
</table>
<input type="checkbox" class="btn btn-info" data-toggle="collapse" data-target="#login"><font color="#5E5959">برای ارسال پیام کلیک کنید</font></input></font></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="background:gray;" id="register">
<form method="post" >
<div class="form-group" id="login" hidden="true" align="right">
<font face="B Homa" size="+1">
عنوان<input type="text" class="form-control" id="title" name="title"></input>
گیرنده<select name="girande" class="form-control">
<?php 
$sql4="SELECT family FROM `teachers`";
$result4=$connect->query($sql4);
foreach($result4 as $rows)
{
   echo"<option>".$rows["family"]."</option>";	
}
 ?></select>
متن پیام<input type="text" class="form-control" id="matn" name="matn"></input>
<br>
<button class="btn btn-warning form-control" id="send-btn" name="send-btn">ارسال پیام</button>
</form>
</font>
</div>
</div><!-----col-lg-6----->
</div><!-----row----->
</div><!-----container----->
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('.collapse').collapse();
</script>
</html>