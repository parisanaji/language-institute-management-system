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
	
}
#promptno
{
	color:rgba(177,6,22,1.00);
	
}
#btn
{
	float:left;
	margin-left:400px;
	margin-bottom:100px;
}
#search
{
	width:100%;
	height:auto;
	border:solid rgba(204,205,205,1.00) 1px;
	border-radius:10px;
	float:right;
	padding:10px;
	color:rgba(152,143,143,1.00);
	font-size:12px;
	direction:rtl;
	box-shadow:10px 10px 5px rgba(191,181,181,1.00);
}
</style>
</head>
<body>
<div class="container">
<a name="nashriyat"></a>
<a href="#video"> ویدیو آموزشی</a>
<br>
<a href="#vocab">لغات روز</a>

<div id="top" align="right">نشریات و مقالات<img  id="pic" src="../pic/chat-02.jpg"></div>
<br>
<div id="matn">
<div id="search">
<form  action="insert-upload.php" class="form-group form-inline" enctype="multipart/form-data" method="post"><label for="title">عنوان</label><input  class="form-control" type="text" name="title" id="title" required>
<label for="ax">تصویر</label><input type="file" name="ax" id="ax" class="form-control" required><br><br>
<label for="matnen">متن انگلیسی</label><textarea name="matnen" id="matnen" class="form-control" required></textarea>

<label for="matnfa">متن فارسی</label><textarea name="matnfa" id="matnfa" class="form-control" required></textarea>

<input type="submit" name="btnmaghale" class="btn-danger form-control" value="درج مطلب" class="form-control"></form></div>
<br><br>
<?php
if(isset($_GET["editokm"]))
{
	echo '<center><div id="promptok">ویرایش مطلب با موفقیت انجام شد</div></center>';
}
if(isset($_GET["noeditm"]))
{
	echo '<center><div id="promptno">متاسفانه ویرایش مطلب اانجام نشد</div></center>';
}

?>
<?php
if(isset($_GET["addm"]))
{
	echo '<center><div id="promptok">درج مقاله با موفقیت انجام شد</div></center>';
}
if(isset($_GET["naddm"]))
{
	echo '<center><div id="promptno">متاسفانه درج مقاله انجام نشد</div></center>';
}

?>
<table class="table table-striped table-bordered table-hover" table-condensed" align="center>
<tr class="info" >
<td>ردیف</td>
<td>شماره</td>
<td>عنوان </td>
<td class="alert-success">ویرایش </td>
<td class="danger">حذف</td>
</tr>
<?php
include "../funcs/connect.php";
$sql="select * from nashriyat";
$radif=1;
$result=$connect->query($sql);
foreach($result as $rows)
{
echo"<tr><td>$radif</td>";	
echo"<td>".$rows["id"]."</td>";
echo"<td>".$rows["onvan"]."</td>";
echo"<td><a href=edit-upload.php?id=".$rows["id"]." ><img src=../pic/tag.png /></a>
</td>";
echo"<td><a href=del-upload.php?id=".$rows["id"]."&photo=".$rows["photo"]."><img src=../pic/Untitled-2.png width=20 height=20 /></a>
</td></tr>";
$radif++;	
}
?>
</table>
</div>
<hr>
<a name="video"></a>
<a href="#vocab">لغات روز</a>
<br>
<a href="#nashriyat">نشریات و مقالات</a>
<div id="top" align="right">ویدیو های آموزشی<img  id="pic" src="../pic/chat-02.jpg"></div>
<br>
<div id="matn"><div id="search">
<form  action="insertvideo.php" class="form-group form-inline" enctype="multipart/form-data" method="post"><label for="title">عنوان</label><input  class="form-control" type="text" name="title" id="title" required>
<label for="file">آپلود ویدیو</label><input type="file" name="file" id="file"  required class="form-control"><br><br>
<input type="submit" name="btnvideo" id="btnvideo" class="btn-danger form-control" value="آپلود" class="form-control"></form></div>
<br>
<?php
if(isset($_GET["videook"]))
{
	echo '<center><div id="promptok">درج ویدیو با موفقیت انجام شد</div></center>';
}
if(isset($_GET["videonok"]))
{
	echo '<center><div id="promptno">متاسفانه درج ویدیو انجام نشد</div></center>';
}

?>
<table class="table table-striped table-bordered table-hover" table-condensed" align="center>
<tr class="info" >
<td>ردیف</td>
<td>شماره</td>
<td>عنوان </td>
<td class="danger">حذف</td>
</tr>
<?php
$sql="select * from videos";
$radif=1;
$result=$connect->query($sql);
foreach($result as $rows)
{
echo"<tr><td>$radif</td>";	
echo"<td>".$rows["id"]."</td>";
echo"<td>".$rows["title"]."</td>";
echo"<td><a href=del-video.php?id=".$rows["id"]."><img src=../pic/Untitled-2.png width=20 height=20 /></a>
</td></tr>";
$radif++;	
}
?>
</table>
</div>
<hr>
<a name="vocab"></a>
<a href="#nashriyat">نشریات و مقالات</a>
<br>
<a href="#video">ویدیو آموزشی</a>

<div id="top" align="right">لغات روز<img  id="pic" src="../pic/wdt_icon_02.png"></div>
<br>
<?php
if(isset($_GET["addv"]))
{
	echo '<center><div id="promptok">درج لغت با موفقیت انجام شد</div></center>';
}
if(isset($_GET["naddv"]))
{
	echo '<center><div id="promptno">متاسفانه درج لغت انجام نشد</div></center>';
}

?>
<div align="right" id="search">
<form class="form-group form-inline" action="insert-vocab.php"  method="get">
<label for="en">انگلیسی</label><input type="text" name="en" id="en"  required class="form-control">
<label for="fa">معادل فارسی</label><input type="text" name="fa" id="fa"  required class="form-control">
<label for="type">دسته</label><select name="type" id="type" class="form-control"><option>504</option><option>idiom</option><option>country</option></select>
<br><br>
<center><input type="submit" value="درج در جدول" name="btnvocab" id="btnvocab" class="form-control btn-danger" ></center>
</form>
</div>
<table class="table table-striped table-bordered table-hover" table-condensed" align="center>
<tr class="info" >
<td class="danger">حذف</td>
<td>دسته</td>
<td>معادل فارسی </td>
<td>انگلیسی </td>
<td>شماره</td>
<td>ردیف</td>
</tr>
<?php
$sql2="select * from vocab";
$result2=$connect->query($sql2);
$radif2=1;
foreach($result2 as $rows2)
{
echo"<tr><td><a href=del-vocab.php?id=".$rows2["id"]." ><img src=../pic/Untitled-2.png width=20 height=20 /></a>
</td>";
echo "<td>".$rows2["type"]."</td>";		
echo "<td>".$rows2["fa"]."</td>";		
echo "<td>".$rows2["en"]."</td>";		
echo "<td>".$rows2["id"]."</td>";		
echo "<td>$radif2</td></tr>";
$radif2++;		
}
?>
</table>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>