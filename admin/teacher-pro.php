<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پروفایل اساتید</title>

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
<script type="text/javascript">
function del(id)
{
	var x=confirm("مطمئن هستید میخواهید این رکورد حذف شود ؟!");
	if(x==true)
	{
	window.location.href="delteacher.php?id="+id;
	}
	else
	{
		window.location.href="";
	}
}

</script>
</head>
<body>
<div class="container">
<br>
<center><img src="../pic/teacher_logo.jpg" width="80" height="80">
<br>
<br>
<label id="label">لیست اساتید</label>
<br>
<br>
<?php
 if(isset($_GET["ok"]))
 {
	echo "<div id=prompt><font color=#00CC33>"."رکورد مورد نظر شما پاک شد"."</font></div>";
 }
 if(isset($_GET["error"]))
{
	echo "<div id=prompt><font  color=#FF0000>"."خطا در حذف رکورد"."</font></div>";
}
if(isset($_GET["errorupdate"]))
{
	echo "<div id=prompt><font  color=#FF0000>"."خطا در بروزرسانی"."</font></div>";
}
if(isset($_GET["update"]))
{
	echo "<div id=prompt><font color=#00CC33>"."به روز رسانی انجام شد"."</font></div>";
}
if(isset($_GET["add"]))
{
	echo "<div id=prompt><font color=#00CC33>"."رکورد جدید اضافه شد"."</font></div>";
}
if(isset($_GET["erroradd"]))
{
	echo "<div id=prompt><font  color=#FF0000>"."خطا در اضافه کردن رکورد"."</font></div>";
}
?>
</center>
<div align="right"><a href="inserttea.php" ><input type="submit" value="استاد جدید" id="button2" class="btn-info"></a></div>
<br>
<table class="table table-striped table-bordered table-hover table-condensed">
<tr class="info" id="table">
<td>ردیف</td>
<td>شماره</td>
<td>نام </td>
<td>نام خانوادگی</td>
<td>سن</td>
<td>میزان تحصیلات</td>
<td>شماره تماس</td>
<td>آدرس</td>
<td>نام کاربری</td>
<td>گذرواژه</td>
<td class="danger">حذف</td>
<td class="warning">ویرایش</td>
</tr>

<?php
 include "../funcs/connect.php";
 $sql="SELECT * FROM `teachers`";
$result=$connect->query($sql);
$sql2="SELECT COUNT(*) FROM `teachers`";
$tedad=$connect->query($sql2);
$num=$tedad->fetchColumn();
$radif=1;
while($num!=0){
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
	$degree=$rows["degree"]; 
	echo "<td>$degree</td>";
	$tell=$rows["tell"];
	echo "<td>$tell</td>"; 
	$address=$rows["address"];
	echo "<td>$address</td>"; 
	$username=$rows["username"]; 
	echo "<td>$username</td>";
	$password=$rows["password"];
	echo "<td>$password</td>";
	echo "<td><a href=#><input id=button type=submit value=del name=btndel onClick=del(".$rows["id"].")></a></td>";
	echo "<td><a href=update-teacher.php?id=".$rows["id"]." target=frame><input id=button type=submit value=edit name=btnedit></</a></td>";
	$radif++;
 	 }
	 
  echo "</tr></table>";
 echo "<br>";
 $num--;
 
 }

?>
</table>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>

</html>