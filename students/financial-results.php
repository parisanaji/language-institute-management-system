<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>کارنامه مالی</title>
</head>
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
#ok
{
	background:rgba(220,244,172,1.00);
}
#nok
{
		background:rgba(239,173,174,1.00);

}
#footer
{
	color:rgba(175,175,175,1.00);
	direction:rtl;
	
	
	}
</style>
<body>
<div class="container">
<div class="row">
<br>
<p><div align="right" style="float:left"><img src="../pic/shahriye.jpg" height="120" width="100"></div></p><br><br><p><div id="titr">کارنامه مالی</div></p>
<table class="table table-striped table-bordered table-hover table-condensed" align="center id="tab">
<tr class="info" >
<td>ردیف</td>
<td>نام دوره </td>
<td>مبلغ </td>
<td>مهلت پرداخت  /  تاریخ واریز</td>
<td>وضعیت پرداخت</td>
</tr>
<?php
include "../funcs/connect.php";
$radif=1;
$sql="select * from shahriye where stuid=".$_GET["id"]."";
$query=$connect->query($sql);
foreach($query as $rows)
{
	echo "<tr>";
	echo "<td>$radif</td>";
	echo "<td>".$rows["course"]."</td>";
	echo "<td>".$rows["mablagh"]."</td>";
	echo "<td>".$rows["tarikhepardakht"]."</td>";
	if($rows["vaziyatpardakht"]=="Paid"){
	echo "<td id=ok>".$rows["vaziyatpardakht"]."</td>";
	}
	if($rows["vaziyatpardakht"]=="UnPaid"){
	echo "<td id=nok>".$rows["vaziyatpardakht"]."</td>";
	}
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
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>