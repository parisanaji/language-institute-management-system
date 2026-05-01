<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>جستجوی نمرات</title>
<head>
<style type=text/css>
body 
{
	font-family:B Homa!important;
	}
#form
{
	direction:rtl;
	color:rgba(132,131,131,1.00);
	font-size:14px;
	margin-top:20px;
	border:solid rgba(163,162,162,1.00) 1px;;
	border-radius:10px;
	padding-top:10px;
}
</style>
</head>
<body>
<br>
<br>
<div class=container>
<div id=form align=center>
<?php
include "../funcs/connect.php";
if(isset($_GET["btnsearch1"]))
{
	  $id=$_GET["id"];
$sql="select * from course where stuid=? ";
$result=$connect->prepare($sql);
$result->bindValue(1,$id);
$query=$result->execute();

if($query)
{
	foreach($result as $rows)
	{
	echo '<form  class="form-group form-inline" action="delrecord.php?id=$id">';
echo "<label>کد </label><input type=text name=id id=id class=form-control value=".$rows["id"].">
<label>کد زبان آموز </label><input type=text name=name id=name class=form-control  value=".$rows["stuid"].">
<label>نام دوره</label><input type=text name=family id=family class=form-control value=".$rows["course"]."><br><br>
<label>تاریخ امتحان </label><input type=text name=age id=age class=form-control value=".$rows["examDate"].">
<label>نمره</label><input type=text name=address id=address class=form-control value=".$rows["point"].">
</form><hr>";
	}
}
else
{
	echo "زبان آموز با این کد ثبت نشده است ";
}
}
?>
<form  class="form-group form-inline" action="#">
<label>جستجو براساس شماره</label><input type=text name="id" id="id" class=form-control placeholder="کد زبان آموز را وارد کنید">
<input type=submit value=جستجو class="btn-danger form-control" name="btnsearch1" id="btnsearch">
</form>
<br>
</div>
</div>
</body>
<link rel=stylesheet href=../bootstrap/css/bootstrap.min.css>
<link rel=stylesheet href=../bootstrap/css/bootstrap-theme.min.css>
<script src=../bootstrap/js/bootstrap.min.js></script>
</html>