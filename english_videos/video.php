<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<video width="470" height="370"  controls="controls" >

<?php
include "../funcs/connect.php";
$sql="select * from videos where id=".$_GET["id"]."";
$result=$connect->query($sql);
foreach($result as $rows)
{
echo "<source src=videos/".$rows["name"]." type='video/mp4' />";
}
?>
</video>
</body>
</html>