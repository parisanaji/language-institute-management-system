<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>زبان آموز جدید</title>
<style type="text/css">
#prompt
{
	font-family:"B Homa";
	font-size:large;
}
#formcss
{
	direction:rtl;
	font-family:"B Homa";
}
#label
{
	font-family:"B Homa";
	font-size:large;
	
	
}
#btnadd
{
	font-family:"B Homa";
	border-radius:5px;	
}
#pic
{
	width:120px;
	height:168px;
	background-color:rgba(228,19,22,1.00);
}
</style>

</head>
<body>
<div class="container" >
<center><label id="label">زبان آموز جدید</label></center>
<br>
<?php
if(isset($_POST["falsePic"]))
{
	echo "<div id=prompt><font color=#00CC33>"."فایل انتخاب شده تصویری نیست"."</font></div>";
}
if(isset($_POST["uploadok"]))
{
	echo "<div id=prompt><font color=#00CC33>"."فایل با موفقیت آپلود شد"."</font></div>";
}
if(isset($_POST["uploadno"]))
{
	echo "<div id=prompt><font color=#00CC33>"."فایل مورد نظر آپلود نشد"."</font></div>";
}
?>
  <form action="insertstu2.php" enctype="multipart/form-data" class="form-group-sm form-inline"  id="formcss">
  <p><font color="#F10A0E">*</font> 
    <label for="id" >شماره</label>
    <input type="text" name="id" class="form-control form-group" id="id" >
    <font color="#F10A0E">*</font> 
    <label for="name" >نام</label>
    <input type="text" name="name" id="name" class="form-control form-group ">
    <font color="#F10A0E">*</font>  
    <label for="family" >نام خانوادگی</label>
    <input type="text" name="family" id="family" class="form-control form-group" >
    <br>
    <br>
    <label for="age" >سن</label>
    <input type="text" name="age" class="form-control form-group" id="age">
    <font color="#F10A0E">*</font> 
    <label for="tell" >شماره تماس</label>
    <input type="text" name="tell" class="form-control form-group" id="tell">
    <label for="address" >آدرس</label>
    <input type="text" name="address" class="form-control form-group" id="address" >
    <br>
    <br>
    <font color="#F10A0E">*</font> 
    <label for="username" >نام کاربری</label>
    <input type="text" name="username" class="form-control form-group" id="username">
    <font color="#F10A0E">*</font> 
    <label for="password" >گذرواژه</label>
    <input type="text" name="password" class="form-control form-group" id="password">
    <br><br>
  </p>
  <center><a href="insertstu2.php"><input type="submit" value="اضافه کردن " id="btnadd" name="btnadd"></a></center>
  </div>
</form>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
</html>