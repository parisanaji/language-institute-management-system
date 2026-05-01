<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پروفایل شخصی</title>

<style type="text/css">
#label
{
	font-family:"B Homa";
	font-size:x-large;
	color:rgba(5,33,100,1.00);
}
a
{
	text-decoration:none;
}
#label
{
	font-family:"B Homa";
	font-size:large;
	color:rgba(7,49,88,1.00);
}
#button
{
	border-radius:5px;
}
#table
{
	font-family:"B Homa";
	font-size:large;
	align-content:center;
	text-align:center;
}
#button2
{
	border-radius:5px;
	font-family:"B Homa";
	font-size:large;
}
#prompt
{
	font-family:"B Homa";
	font-size:large;
}
</style>
</head>
<body>
<div class="container">
<br>
<br>
<br>
<br>
<br>
<center>
<?php
 
if(isset($_GET["errorupdate"]))
{
	echo "<div id=prompt><font  color=#FF0000>"."خطا در بروزرسانی"."</font></div>";
}
if(isset($_GET["update"]))
{
	echo "<div id=prompt><font color=#00CC33>"."به روز رسانی انجام شد"."</font></div>";
}

?>
</center>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
<tr class="info" id="table">
<td>ردیف</td>
<td>شماره</td>
<td>نام </td>
<td>نام خانوادگی</td>
<td>سن</td>
<td>شماره تماس</td>
<td>آدرس</td>
<td>نام کاربری</td>
<td>گذرواژه</td>
<td class="warning">ویرایش</td>
</tr>

<?php
 include "../funcs/connect.php";
 $sql2="SELECT * FROM `students` WHERE id=?";
$result=$connect->prepare($sql2);
$result->bindValue(1,$_GET["id"]);
$result->execute();
$radif=1;
 foreach($result as $rows)
 {	
	 echo "<tr>";
	 echo "<td>$radif</td>";
	$id=$rows["id"]; 
	echo "<td>$id</td>";
	$aaname=$rows["name"]; 
	echo "<td>$aaname</td>";
	$family=$rows["family"]; 
	echo "<td>$family</td>";
	$age=$rows["age"]; 
	echo "<td>$age</td>";
	$tell=$rows["tell"];
	echo "<td>$tell</td>"; 
	$address=$rows["address"];
	echo "<td>$address</td>"; 
	$username=$rows["username"]; 
	echo "<td>$username</td>";
	$password=$rows["password"];
	echo "<td>$password</td>";
	echo "<td><a href=update-stu.php?id=".$rows["id"]." target=frame><input id=button type=submit value=edit name=btnedit></</a></td>";
	 echo "</tr></table>";
 	 }
	 
 echo "<br>";

?>
</table>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>

</html>