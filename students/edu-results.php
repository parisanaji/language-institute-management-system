<!DOCTYPE html>
<html>
<head>
<title>Bootstrap</title>
<style type="text/css">
#label
{
	direction:rtl;
	text-align:right;
	font-family:"B Homa";
	font-size:18px;
	color:rgba(116,113,114,1.00);
	
}
#pic
{
	opacity:.5;
	float:left;
}

</style>
</head>
<body>
<div class="container">
<div class="row">
<br>
<center><label><font face="B Homa" size="+3" color="#14012F">Results</font></label></center>
<br>
<br>
<div id="pic"><img src="../pic/stu.png" width="100" height="100"/></div>
<div align="right">
<?php
include "../funcs/connect.php";
$sql2="SELECT * FROM `students` WHERE id=?";
$sql3="SELECT * FROM `course` WHERE stuid='".$_GET["id"]."'";
$result=$connect->prepare($sql2);
$result->bindValue(1,$_GET["id"]);
$result->execute();
foreach($result as $rows)
 {
	 echo'<div class="col-lg-2"><label id="label">شماره :'.$rows["id"].'</label></div>';
	 echo'<div class="col-lg-2"><label id="label">نام خانوادگی :'.$rows["family"].'</label></div>';
	 echo'<div class="col-lg-2"><label id="label">نام :'.$rows["name"].'</label></div>';
 }

?>
</div>
<br>
<font face="B Homa" size="+1"><table class="table table-striped table-bordered table-hover table-condensed">
<tr class="info" id="table">
<td>ردیف</td>
<td>نام دوره</td>
<td>تاریخ امتحان</td>
<td>نام مدرس</td>
<td>نمره</td>
<td>وضعیت</td>
</tr>
</font>
<?php
$result3=$connect->query($sql3);
$radif=1;
foreach($result3 as $rows2)
{
	echo"<tr>";
	echo"<td>";
	echo $radif;
	echo"</td>";
	echo"<td>";
	echo $rows2["course"];
	echo"</td>";
	echo"<td>";
	echo $rows2["examDate"];
	echo"</td>";
	echo"<td>";
	echo $rows2["teacherName"];
	echo"</td>";
	if($rows2["point"]>=50)
	{
	echo'<td bgcolor="#91F472">';
	echo $rows2["point"];
	echo"</td>";
	echo "<td>";
	echo "Passed";	
	echo "</td>";
	}
	else
	{
	echo'<td bgcolor="#F4A7B1">';
	echo $rows2["point"];
	echo"</td>";
	echo "<td>";
	echo "Failed";	
	echo "</td>";	
	}
	echo"</tr>";
	$radif++;
}
?>
</table>
</div>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>