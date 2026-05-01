<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>صدای مشتریان</title>
<style type="text/css">
body
{
	font-family:"B Homa";
}
#top
{
	color:rgba(23,53,150,1.00);
	font-size:18px;
	margin-right:15px;
	direction:rtl;
	
}
#topnazar
{
	background:rgba(106,154,237,1.00);
	color:white;
	padding:3px;
	border-radius:10px;
	width:auto;
}
#matn
{
	color:rgba(103,102,102,1.00);
	font-size:16px;
	margin-right:10px;	

}
#nazar
{
	margin-right:10px;
	direction:rtl;
}
#pic
{
	float:left;
	width:330px;
	height:auto;
	margin-left:30px;
}
</style>
</head>
<body>
<div align="right" id="top">نتایج حاصل از طرح رضایت سنجی به شرح زیر می باشد
<div id="pic"><img src="../pic/3d_man_6_20091019_1016879157.jpg" width="200" height="100" /></div></div><br>
<div id="matn" align="right">
تعداد کل نظر دهندگان :
<?php
include "../funcs/connect.php";
$sql="select count(*) from comment";
$result=$connect->query($sql);
$num=$result->fetchColumn();
echo $num."نفر";
echo "<br>";
echo "<p><div id=topnazar>:رضایت سنجی تدریس اساتید</div>";
$sql2="select count(*) from comment where tadris='خوب'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#619011>خوب :$num2.نفر</font></div>";
   
$sql2="select count(*) from comment where tadris='بد'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#E92427>بد :$num2.نفر</font></div>";
  
$sql2="select count(*) from comment where tadris='متوسط'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#EDCB17>متوسط :$num2.نفر</font></div>";
echo "<div id=topnazar>:رضایت سنجی رفتار و کردار کارمندان و اساتید</div>";
$sql2="select count(*) from comment where raftar='خوب'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#619011>خوب :$num2.نفر</font></div>";
   
$sql2="select count(*) from comment where raftar='بد'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#E92427>بد :$num2.نفر</font></div>";
  
$sql2="select count(*) from comment where raftar='متوسط'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#EDCB17>متوسط :$num2.نفر</font></div>";
echo "<div id=topnazar>:رضایت سنجی میزان موثر بودن امتحانات در ارزیابی دانش زبان آموزان</div>";
$sql2="select count(*) from comment where exam='زیاد'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#619011>زیاد :$num2.نفر</font></div>";
   
$sql2="select count(*) from comment where exam='کمی'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#E92427>کمی :$num2.نفر</font></div>";
  
$sql2="select count(*) from comment where exam='اصلا'";
$result2=$connect->query($sql2);
$num2=$result2->fetchColumn();
echo "<div id=nazar><font color=#EDCB17>اصلا :$num2.نفر</font></div>";
echo "<div id=topnazar>:شکایات مطرح شده از سوی زبان آموزان<br></div>";
$sql="select shekayat from comment";   
$result=$connect->query($sql);
foreach($result as $rows)
{
	echo "<img src=../pic/cccc1.png width=20 height=20 /> <font color=#BB0A0D >".$rows["shekayat"]."</font><br>";
}
?>




</div>
</body>
</html>