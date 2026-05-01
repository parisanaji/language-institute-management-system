<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>مدیریت شهریه ها</title>
<style type="text/css">
body
{
	font-family:"B Homa" !important;
}
#titr
{
	font-size:24px;
	color:rgba(6,77,123,1.00);
	margin-right:5px;
	direction:rtl;
	float:right;

}
#prompt
{
	color:rgba(220,244,172,1.00);
}
#promptn
{
		color:rgba(239,173,174,1.00);

}
#footer
{
	color:rgba(175,175,175,1.00);
	direction:rtl;
	
	
	}
</style>
</head>
<body>
<div class="container">
<div class="row">
<p><div align="right" style="float:left"><img src="../pic/imagesshhh.jpg" height="120" width="120"></div></p><br><br><p><div id="titr">لیست پرداختی ها</div><br></p>
<?php
if(isset($_GET["del"]))
{
	echo'<center><div id=prompt>حذف انجام شد</div></center>';
}
if(isset($_GET["nodel"]))
{
	echo'<center><div id=promptn>متاسفانه حذف انجام نشد</div></center>';
}

?>
<table class="table table-striped table-bordered table-hover table-condensed" align="center id="tab">
<tr class="info" >
<td>ردیف</td>
<td>نام و نام خانوادگی زبان آموز</td>
<td>نام دوره </td>
<td>مبلغ </td>
<td> تاریخ واریز</td>
<td class="danger">حذف</td>
</tr>
<?php
include "../funcs/connect.php";
$sql="select * from shahriye where vaziyatpardakht='Paid'";
$query=$connect->query($sql);
$radif=1;
foreach($query as $rows)
{
	echo "<tr>";
	echo "<td>$radif</td>";
	$sql2="select * from students where id=".$rows["stuid"]."";
	$query2=$connect->query($sql2);
	foreach($query2 as $rows2)
	{
	echo "<td>".$rows2["name"].".".$rows2["family"]."</td>";
	}
	echo "<td>".$rows["course"]."</td>";
	echo "<td>".$rows["mablagh"]."</td>";
	echo "<td>".$rows["tarikhepardakht"]."</td>";
	echo "<td><a href=delfoctor.php?id=".$rows["id"]."><img src=../pic/Untitled-2.png width=20 height=20 /></a></td>";
	echo "</tr>";
	$radif++;

}
?>
</table>
<div align="right" id="footer">مبالغ به ریال می باشد.</div>

<br>
<p><div align="right" style="float:left"><img src="../pic/shahriye.jpg" height="120" width="120"/></div></p><br><br><p><div id="titr">لیست بدهکاران</div></p>
<table class="table table-striped table-bordered table-hover table-condensed" align="center id="tab">
<tr class="info" >
<td>ردیف</td>
<td>نام و نام خانوادگی زبان آموز</td>
<td>نام دوره </td>
<td>مبلغ </td>
<td> مهلت پرداخت</td>
<td class="danger">حذف</td>
</tr>
<?php
$sql="select * from shahriye where vaziyatpardakht='UnPaid'";
$query=$connect->query($sql);
$radif=1;
foreach($query as $rows)
{
	echo "<tr>";
	echo "<td>$radif</td>";
	$sql2="select * from students where id=".$rows["stuid"]."";
	$query2=$connect->query($sql2);
	foreach($query2 as $rows2)
	{
	echo "<td>".$rows2["name"].".".$rows2["family"]."</td>";
	}
	echo "<td>".$rows["course"]."</td>";
	echo "<td>".$rows["mablagh"]."</td>";
	echo "<td>".$rows["tarikhepardakht"]."</td>";
	echo "<td><a href=delfoctor.php?id=".$rows["id"]."><img src=../pic/Untitled-2.png width=20 height=20 /></a></td>";
	echo "</tr>";
	$radif++;

}
?>
</table>
<div align="right" id="footer">مبالغ به ریال می باشد.</div>

</div>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>
