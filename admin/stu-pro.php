<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پروفایل دانش آموزان </title>
<script type="text/javascript">
function del(id)
{
	var x=confirm("مطمئن هستید میخواهید این رکورد حذف شود ؟!");
	if(x==true)
	{
	window.location.href="delrecord.php?id="+id;
	}
	else
	{
	window.location.href="";	
	}
}
</script>
<style type="text/css">
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

<center><img src="../pic/همیار-انرژی-دانش-آموزی-لوگو-300x224.jpg" width="80" height="80"><br><label id="label">لیست زبان آموزان</label>
<div align="right"><a href="insertstu.php" ><input type="submit" value="زبان آموز جدید" id="button2" class="btn-info"></a>
<a href="search-stu.php" ><input type="submit" value="جستجو" id="button2" class="btn-info"></a></div>
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
?></center>
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
<td class="danger">حذف</td>
<td class="warning">ویرایش</td>
</tr>

<?php
 include "../funcs/connect.php";
 $sql="SELECT * FROM `students`";
$result=$connect->query($sql);
$sql2="SELECT COUNT(*) FROM `students`";
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
	$tell=$rows["tell"];
	echo "<td>$tell</td>"; 
	$address=$rows["address"];
	echo "<td>$address</td>"; 
	$username=$rows["username"]; 
	echo "<td>$username</td>";
	$password=$rows["password"];
	echo "<td>$password</td>";
	echo "<td><a href=# onClick=del(".$rows["id"].")><input id=button type=submit value=del name=btndel></a></td>";
	echo "<td><a href=update-stu.php?id=".$rows["id"]." target=frame><input id=button type=submit value=edit name=btnedit></a></td>";
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