<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>لیست نمرات</title>
</head>
<style type="text/css">
body
{
	font-family:"B Homa"!important;
	color:rgba(103,99,99,1.00)!important;
	text-align:right;
}
#form
{
	
	margin-right:130px;
	padding:15px;
	width:500px;
	height:auto;
	border: solid rgba(189,183,183,1.00) 1px;
	border-radius:10px;
	box-shadow:15px 15px 5px rgba(167,159,159,1.00);
}
#form2
{
	
	
	padding:15px;
	width:700px;
	height:auto;
	border: solid rgba(176,173,173,1.00) 1px;
	border-radius:10px;
	box-shadow:10px 10px 5px rgba(167,159,159,1.00);

}
#top
{
	margin-right:10px;
	font-size:14px;
	color:rgba(189,119,17,1.00);
	
}
#promptok
{
	border:solid 2px rgba(21,18,18,1.00);
	text-align:center;
	background:rgba(142,231,87,1.00);
	color:rgba(0,0,0,1.00);
	direction:rtl;
}
#promptno
{
	border:solid 2px rgba(35,33,33,1.00);
	text-align:center;
	background:rgba(248,119,121,1.00);
	color:rgba(7,7,7,1.00);
	
}
</style>
<?php 
include "../funcs/connect.php";
if(isset($_GET["error"]))
{
	echo "<div id=promptno><font   size=+1>"."متاسفانه نمرات ارسال نشد"."</font></div>";
	
}
if(isset($_GET["add"]))
{
	echo "<div id=promptok><font  size=+1>"."ثبت نمرات با موفقیت انجام شد"."<br></div>";
}
$sql="select * from teachers where id=".$_GET["id"]."";
$result=$connect->query($sql);
foreach($result as $rows)
{
	 $tname=$rows["name"];
	 $tfamily=$rows["family"];
	 $id=$rows["id"];
}

?>
<body>
<div class="container">
<div class="row" dir="rtl">
<br>
<center><img src="../pic/9_orig.png" width="50" height="50"/><label id="top" >وارد کردن نمرات</label></center><br>
<div id="form" align="center">
<form class="form-group-sm form-inline" action="check-point.php?id=$_Get["id"]" method="get">
<label for="stu-id">کد دانش آموز</label><input type="text" name="stu-id" id="stu-id" class="form-control">
<label for="course">نام دوره آموزشی</label><select name="course" id="course" class="form-control"><option>beginner</option><option>elementary</option><option>pre-intermediate</option><option>intermediate</option><option>upper-intermediate</option><option>IEILTS</option><option>e-kids</option></select><br><br>
<label for="date">تاریخ امتحان</label><input type="text" name="date" id="date" class="form-control">
<label for="point">نمره </label><input type="text" name="point" id="point" class="form-control">
<input type="hidden" name="teachername"  id="teachername" value="<?php  echo $tname.$tfamily ?>" >
<input type="hidden" name="id"  id="id" value="<?php  echo $id ?>" >
<br><br>
<center><input type="submit" name="btn" id="btn" value="ارسال "class="form-control btn-info" ></center>
</form>
</div>
<br>
<img src="../pic/9_orig.png" width="30" height="30"/><div id="top">لیست نمرات وارد شده <a href="searchpoint.php"><input style="margin-right:10px;" type="submit" name="btn" id="btn" value="جستجو "class="btn-info" ></a></div>
<br>
<div id="form2">
<table class="table table-striped table-bordered table-hover table-condensed">
<tr class="info" id="table">
<td>شماره دانش اموز</td>
<td>نام دوره آموزشی</td>
<td>تاریخ امتحان</td>
<td>نمره</td>
</tr>

<?php

$teacher=$tname.$tfamily;
$sql2="select * from course where teacherName=?";
$result2=$connect->prepare($sql2);
$result2->bindValue(1,$teacher);
$result2->execute();
foreach($result2 as $rows2)
{
	echo '<tr>';
	echo "<td>".$rows2["stuid"]."</td>";
	echo "<td>".$rows2["course"]."</td>";
	echo "<td>".$rows2["examDate"]."</td>";
	echo "<td>".$rows2["point"]."</td>";
}
?>
</tr>
</table>
</div>
</div>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>