<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ویرایش اطلاعات اساتید</title>
<style type="text/css">
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
#btnup
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
<?php
include "../funcs/connect.php";
$sql="select * from teachers where id='".$_GET["id"]."'";
$result=$connect->query($sql);
while($rows=$result->fetch(PDO::FETCH_ASSOC))
{
	$_SESSION["id"]=$rows["id"];
?>
<div class="container" >
<center><label id="label">ویرایش اطلاعات اساتید</label></center>
<br>

  <center>
  
  </center>
  <form action="update-t.php" enctype="multipart/form-data" class="form-group-sm form-inline" id="formcss">
  <p><font color="#F10A0E">*</font> 
    <label for="id" >شماره</label>
    <input type="text" name="id" class="form-control form-group" id="id" readonly value=<?php echo $rows["id"]; ?>>
    <font color="#F10A0E">*</font> 
    <label for="name" >نام</label>
    <input type="text" name="name" id="name" class="form-control form-group " value=<?php echo $rows["name"]; ?>>
    <font color="#F10A0E">*</font>  
    <label for="family" >نام خانوادگی</label>
    <input type="text" name="family" id="family" class="form-control form-group" value=<?php echo $rows["family"]; ?>>
    <br>
    <br>
    <label for="age" >سن</label>
    <input type="text" name="age" class="form-control form-group" id="age" value=<?php echo $rows["age"]; ?>>
    <label for="degree" >میزان تحصیلات</label>
    <input type="text" name="degree" class="form-control form-group" id="degree" value=<?php echo $rows["degree"]; ?>>
    <font color="#F10A0E">*</font> 
    <label for="tell" >شماره تماس</label>
    <input type="text" name="tell" class="form-control form-group" id="tell" value=<?php echo $rows["tell"]; ?>>
      <br>
    <br>
    <label for="address" >آدرس</label>
    <input type="text" name="address" class="form-control form-group" id="address" value=<?php echo $rows["address"]; ?>>
    <font color="#F10A0E">*</font> 
    <label for="username" >نام کاربری</label>
    <input type="text" name="username" class="form-control form-group" id="username" value=<?php echo $rows["username"]; ?>>
    <font color="#F10A0E">*</font> 
    <label for="password" >گذرواژه</label>
    <input type="text" name="password" class="form-control form-group" id="password" value=<?php echo $rows["password"]; ?>>
    <br><br>
  </p>
  <center><a href="update-t.php"><input type="submit" value="به روز رسانی" id="btnup" name="btnup"></a></center>
  </div>
</form>
  <?php 
}
?>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
</html>