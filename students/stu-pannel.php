<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پنل زبان آموزان</title>
<style type="text/css">
body
{
	background-color:rgba(216,208,208,1.00)!important;

}
#top
{
	font-family:"B Homa";
	background-color:black;
	border-radius:10px;
	height:30px;
	
	
}
#top2
{
	font:B Homa;
	color:white;
	margin-right:10px;
	font-size: 18px;
	margin-top:5px;
}
#logout
{
	float:left;
	margin-left:10px;
	color:red;
}
#content
{
	margin-top:20px;
	width:1200px;
	height:1100px;
	
}
#rmenu
{
	background-color:rgba(96,91,91,1.00);
	width:250px;
	float:right;
	height:1100px;
	border-radius:20px;
}

#lmenu
{
	background:rgba(252,252,252,1.00);
	float:right;
	width:900px;
	height:1100px;
	border-radius:20px;
	margin-right:10px;	
}
ul li
{

	
	font-family:"B Homa";
	font-size:large;
	color:rgba(245,244,251,1.00);
	list-style:none;
	text-align:right;
	padding-bottom:2px;
	padding-right:10px;
	padding-left:10px;
	margin-top:2px;
	margin-right:25px;
	margin-left:0px;
	direction:rtl;
	background-color:rgba(148,195,239,1.00);
	border-radius:10px;
	border:thin rgba(32,80,232,1.00);
}
ul li:hover
{
	background-color:rgba(47,113,215,1.00);
	transition:all 1s;
}
#rmenu a
{
	
	text-decoration:none;
	color:black;
	
	
}
#rmenu a:hover
{
	color:rgba(177,10,47,1.00);
}
#frame
{
	width:890px;
	height:1000px;
	margin-top:7px;
	border:none;
	
}
#dakheli 
{
	font-family:"B Homa";
	text-align:right;
	margin-right:100px;
	font-size:14px;
	color:rgba(8,9,91,1.00)`}
#date
{
	
	margin-right:100px;
	margin-left:100px;
	font-family:"B Homa";
	color:gray;
	font-size: smaller;

}
#pic 
{
	margin-left:5px;
}
</style>


<script type="text/javascript">
function exit()
{
var x=confirm("آیا مایل به خروج هستید؟");
if(x==true)
{
	window.location.href="../logout.php";
}
else
{
	
}
}
</script>
<center>
<?php
include "../funcs/connect.php";
$date="Today is : ".date("M-d-Y");
$time=date("H:i A");
if($_SESSION["stu-login"]==1)
{
	$sql="select * from students where username='".$_GET["user"]."'";
	$result=$connect->query($sql);
	foreach($result as $rows)
	{
		echo "<div id=top>
		<div id=top2 align=right> ".$rows["name"]." ".$rows["family"]." به پنل کاربری خود خوش آمدید
		<div id=logout><a href='#' onClick=exit()><img src=../pic/tooplate_more.png></a>  خروج</div>
		</div></div>";
		echo "<center><div id=date>$date</div></center>";
	}
?>
</head>
<body>
<div class="container" id="content">
 <center><div id="rmenu">
 <br>
 <br>
 <ul>

  <?php
  	echo "<li><a href=self-pro.php?id=".$rows["id"]." target=frame><img id=pic src=../pic/agent.png width=20 height=20/>پروفایل</a></li>";
	echo "<li><a href=edu-results.php?id=".$rows["id"]." target=frame>  <img id=pic src=../pic/stu.png width=20 height=20 />
کارنامه آموزشی</a></li>";
	echo "<li><a href=financial-results.php?id=".$rows["id"]." target=frame> <img  id=pic src=../pic/shahriye2.jpg width=20 height=20 />
کارنامه مالی </a></li>";
	echo "<li><a href=ruls.php?id=".$rows["id"]." target=frame>  <img id=pic src=../pic/cccc1.png width=20 height=20 />
قوانین و مقررات</a></li>";
	echo "<li><a href=messages.php?id=".$rows["id"]." target=frame>  <img id=pic src=../pic/Generic.Theme-Light_Scale-300.png width=20 height=20 />
پیام ها</a></li>";
	}
else
{
	header("location:stu-login.php");
	exit;
}
	
	?>
	
 	
    

 </ul>
 </div>
 <div id="lmenu">
 <iframe id="frame" name="frame"></iframe>
 </div>
</div>
</body></center>

<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>
