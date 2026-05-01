<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>مدیریت مطلالب</title>
<style type="text/css">
body{
	font-family:"B Homa" !important;
}
#top
{
	font-size:24px;
	color:rgba(23,84,135,1.00);
	margin-right:30px;
	
}
#matn
{
	font-size:14px;
	color:rgba(107,97,97,1.00);
	direction:rtl;
	margin-right:30px;
	margin-left:30px;
}
#pic
{
	margin-left:10px;
}
#promptok
{
	color:rgba(40,95,6,1.00);
	border:rgba(5,136,12,1.00) solid 5px;
}
#promptno
{
	color:rgba(177,6,22,1.00);
	border:rgba(122,17,18,1.00) solid 5px;
}
</style>
</head>
<body>
<br>
<div id="matn">
<?php 
include "../funcs/connect.php";
echo "<form  action=edit-upload2.php class='form-group form-inline' enctype='multipart/form-data' >";
$sql="select * from nashriyat where id=".$_GET["id"]."";
$query=$connect->query($sql);
foreach($query as $rows)
{
echo "
<label><img src=../nashriyat/pic/".$rows["photo"]." />
<input type='hidden' name='photo' id='photo' value=".$rows["photo"]." /></label><br>
<label for=title>عنوان</label><textarea name=title id=title>".$rows["onvan"]."</textarea><br><br>
<label for=matnen>متن انگلیسی</label><textarea name=matnen id=matnen class=form-control>".$rows["matnlatin"]."</textarea><br><br>
<label for=matnfa>متن فارسی</label><textarea name=matnfa id=matnfa class=form-control>".$rows["matnfarsi"]."</textarea><br><br>
<input type='hidden' name='id' id='id' value=".$_GET["id"].">
<a href=edit-upload2.php?id=".$_GET["id"]."><input type=submit name=btneditmaghale class=btn-danger value=ویرایش class=form-control></a></form>
";
}
?>
<br>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>