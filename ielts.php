<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>معرفی دوره ها</title>
<style type="text/css">
body
{
	direction:rtl;
	
}
ul li a:hover
{
	color:rgba(28,243,247,1.00)!important;
}
#matn
{
	margin-right:40px;
}
.col_5
{
	float:right;
	width:700px;
}
.col_1
{
	width:400px;
	float:left;
}
</style>
</head>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="funcs/jquery-1.6.3.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="funcs/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="funcs/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

</head>
<body>
<a name="top"></a>

<div id="tooplate_header">
    <a href="index.php" class="sitetitle">زبانکده شریعتی</a>  
    <div id="tooplate_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">صفحه اصلی</a></li>
            <li><a href="#">ورود اعضا</a>
                <ul>
                    <li><a href="admin/admin_login.php">مدیران</a></li>
                    <li><a href="students/stu-login.php">زبان آموزان</a></li>
                    <li><a href="teachers/tea.login.php">اساتید</a></li>
                                                                                            
                </ul>
            </li>
            <li><a href="#">محصولات آموزشی</a>
                <ul>
                    <li><a href="vocab/vocab.php">لغات روز</a></li>
                    <li><a href="english_videos/english_videos.php">فیلم آموزشی</a></li>
                    <li><a href="nashriyat/nashriyat.php">نشریات انگلیسی</a></li>
                </ul>
            </li>
   
          <li><a href="#">درباره ما</a>
           <ul>
                    <li><a href="moarefi_asatid.php">معرفی اساتید</a></li>
            
            </ul>               
           </li> 
        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->      
</div> <!-- END of header -->
<body>

<div id="matn" class="col_5" align="right">
<?php
include "funcs/connect.php";
$sql="SELECT * FROM `price-course` WHERE id=".$_GET["id"]." ";
$result=$connect->query($sql);
echo "<br>";
echo "<br>";
foreach($result as $rows)
{
	echo "<font size=+2 color=#1773A7 >".$rows["name"]."</font>";
	echo "<br>";
	echo "<br>";
	echo "<font size=+1 color=#534E4E >".$rows["tozih"]."</font>";

?>
<br><br>
<img src="pic/xBanner-IELTS-03.jpg"/><br><br>
<?php


echo "<font size=+1 color=#534E4E >".$rows["tozih2"]."</font>";

}

?>
</div>
			<div class="col_1"><img src="pic/Teacher-Icon2.png" width="100" height="100"/><br /></div>
        <br />
        	<div class="col_1">
            	<img src="pic/children-course.jpg" alt="image" class="img_border img_border_b img_nom" />
                <p align="center">دوره ویژه کودکان  <br /></p><?php echo"<a href=kids.php?id=4  target=_parent >ادامه مطلب...</a>"?>
            </div>
            <br>
            <br><br>
            <div class="col_1">
            	<img src="pic/5555.jpg" alt="image" class="img_border img_border_b img_nom" />
                <p align="center">دوره مترجمی کاربردی <br /></p><?php echo"<a href=motarjemi.php?id=3  target=_parent >ادامه مطلب...</a>"?>
            </div>
            <br><br><br>
            <div class="col_1">
            	<img src="pic/9797.jpg" alt="image" class="img_border img_border_b img_nom" />
                <p align="center">دوره ویژه بزرگسالان</p><br /><?php echo"<a href=adults.php?id=2  target=_parent >ادامه مطلب...</a>"?>
            </div>
            
       
       
<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_4" dir="rtl">
        	<h4>صفحات </h4>
            <ul class="nobullet bottom_list" dir="rtl">
            	<li><a href="index.php">صفحه اصلی</a></li>
                <li><a href="#">ورود اعضا</a></li>
                <li><a href="#">محصولات آموزشی</a></li>
                <li><a href="#">درباره ما</a></li>
            </ul>
        </div>
        
        <div class="col_4" dir="rtl">
        	<h4>لینک های مفید</h4>
            <ul class="nobullet bottom_list" dir="rtl">
                <li><a href="http://shariaty.ac.ir">دانشکده فنی دکتر شریعتی</a></li>
                <li><a href="#">آموزشگاه  زبان کیش</a></li>
                <li><a href="#">آموزشگاه زبان شکوه</a></li>
                <li><a href="#">کانون زبان ایران</a></li>
        </div>
        
         <div class="col_4" dir="rtl">
        	<h4>آدرس</h4>
            <p> تهران- میدان بهمن - بزرگراه شهید تندگویان - خیابان میثاق جنوبی - خیابان 61 شرقی</p>
            <h4>کانال تلگرام</h4>
            <p>telegram.me/tvu_shariaty</p>
        </div>
        <div class="col_4 no_margin_right" dir="rtl">
        	<h4>درباره ما</h4>
            <p>زبانکده دکترشریعتی با بیش از ده سال خدمت درزمینه آموزش زبان انگلیسی، مفتخر به داشتن بیش از 10000 زبان آموز در دوره های آموزشی مختلف می باشد.</p>
        </div>
        <div class="clear"></div>
	</div> <!-- END of tooplate_footer -->
</div> <!-- END of tooplate_footer_wrapper -->
<marquee dir="rtl" behavior="alternate" ><img src="pic/Untitled-1.jpg"/></marquee>

<div id="tooplate_copyright_wrapper">
    <div id="tooplate_copyright">
        
       <div align="left" class="col_4">Copyright © All Rights Reserved</div>
        <div align="right" class="col_34" > طراحی توسط نیلوفر مظلومیان و پریسا ناجی</div>
    </div>
</div>

</body>
</html>