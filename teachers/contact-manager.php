<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ارتباط با مدیران</title>
<style type="text/css">
body 
{
	font-family:"B Homa"!important;
	}

#right
{
	margin-left:10%;
	margin-right:10%;
	float:right;
	width:200px;
	height:200px;
	background-color:rgba(217,217,217,1.00);
	border-radius:200px;
	font-size:10px;
	color:rgba(130,118,118,1.00);
	box-shadow:10px 10px 5px rgba(167,161,161,1.00);

	
}
#left
{
	margin-left:10%;
	margin-right:10%;
	float:left;
	width:200px;
	height:200px;
	background-color:rgba(217,217,217,1.00);
	border-radius:200px;
	font-size:10px;
	color:rgba(130,118,118,1.00);
	box-shadow:10px 10px 5px rgba(167,161,161,1.00);

}
#left:hover
{
	
	transition:2s all ease;
	background-color:rgba(152,148,148,1.00);
}
#right:hover
{
	
	transition:2s all ease;
	background-color:rgba(152,148,148,1.00);
}
#register
{
	padding:10px;
	border-radius:10px;
	background:rgba(165,205,212,1.00);
}
#prompt
{
	background:rgba(231,223,32,1.00);
	border-radius:10px;
	float:right;
	color:rgba(132,128,128,1.00);
	
}
#contact
{
	float:right!important;
	width:50%;
	margin-top:50px;
}
</style>
</head>
<body>
<div class="container">
<br><br><br>
<div align="right" id="right">
<br>
<br>
<center><img src="../pic/4120.png" width="60" height="60"/></center>  
<?php
include "../funcs/connect.php";

$sql="SELECT * FROM `admin` WHERE id=6";
$result=$connect->query($sql);
foreach($result as $rows)
{
	echo "<center>";
	echo "<br>";
	echo $rows["name"]."".$rows["family"];
	echo "<br>";
	echo "<img src=../pic/Generic.Theme-Light_Scale-300.png width=20 height=20> ".$rows["email"]."";
	echo "<br>";
	echo "<img src=../pic/phone.png width=20 height=20> ".$rows["tell"]."";
}

 ?>
 </div>
 <div  id="left">
<br><br>
<center><img src="../pic/4120.png" width="60" height="60"/></center>
<?php
$sql="SELECT * FROM `admin` WHERE id=4";
$result=$connect->query($sql);
foreach($result as $rows)
{
	echo "<center>";
	echo "<br>";
	echo $rows["name"]."".$rows["family"];
	echo "<br>";
	echo "<img src=../pic/Generic.Theme-Light_Scale-300.png width=20 height=20> ".$rows["email"]."";
	echo "<br>";
	echo "<img src=../pic/phone.png width=20 height=20> ".$rows["tell"]."";
}

 ?>
 </div>
 <div id="contact">
<br>
<?php
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
	$result->bindValue(5,"مدیران
	
	");
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
<br>
<div align="right"><input type="checkbox" class="btn btn-info" data-toggle="collapse" data-target="#login"><font color="#5E5959" size="+1" dir="rtl">برای مکاتبه با مدیران کلیک کنید</font></input></font><br></div>
<div  id="register">
<form method="post" >
<div id="login" hidden="true" align="right">
<font face="B Homa" size="+1">
عنوان<input type="text" class="form-control" id="title" name="title"></input>
گیرنده<select name="girande" class="form-control">
<?php 
$sql4="SELECT family FROM `admin`";
$result4=$connect->query($sql4);
foreach($result4 as $rows)
{
   echo"<option>".$rows["family"]."</option>";	
}
 ?></select>
متن پیام<input type="text" class="form-control" id="matn" name="matn"></input>
<br>
<button class="btn btn-danger form-control" id="send-btn" name="send-btn">ارسال پیام</button>
</form>
</div>
</div>
<br><br>
<br>

</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('.collapse').collapse();
</script>
</html>