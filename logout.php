
<?php
session_start();
$_SESSION["admin-login"]=0;
$_SESSION["stu-login"]=0;
$_SESSION["tea-login"]=0;
header("location:index.php");
exit;
?>