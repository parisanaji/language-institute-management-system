<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>سایت زبانکده شریعتی</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<style type="text/css">
ul li a:hover
{
	color:rgba(28,243,247,1.00)!important;
}

#news
{
	width:auto;
	height:50px;
	border-radius:15px;
	background:rgba(146,179,203,1.00);
	text-align:center;	
	color:rgba(76,101,119,1.00);
	
}
#news2
{
background:rgba(151,157,162,1.00);	
border-radius:15px;
font-size:16px;
text-align:center;	
}
#news:hover
{
	
	transition:1s all ease-in-out;
	background:rgba(121,154,179,1.00);
}
#news2:hover
{
	
	transition:1s all ease-in-out;
	background:rgba(183,188,192,1.00);	

}
#black
{
	background:rgba(85,77,77,1.00);
}
#frame
{
	width:500px;
	height:420px;
	border:none;
	text-wrap:normal !important;

}
.button three
{
	float:left;
	margin-left:400px;
}

</style>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="funcs/jquery-1.6.3.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="funcs/ddsmoothmenu.js">

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

<div id="tooplate_header">
    <a href="index.php" class="sitetitle">زبانکده شریعتی</a>  
    <div id="tooplate_menu" class="ddsmoothmenu">
        <ul>
            <li id="black"><a href="#" class="selected">صفحه اصلی</a></li>
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
                     <li><a href="#course">معرفی دوره های آموزشی</a></li>

                </ul>
            </li>
   
          <li ><a href="#">درباره ما</a>
           <ul>
                    <li><a href="moarefi_asatid.php">معرفی اساتید</a></li>
            
            </ul>               
           </li> 
        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->      
</div> <!-- END of header -->
<div id="tooplate_slider_wrapper">
    <div id="tooplate_slider">
    	<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="pic/5.jpg" alt="" title="#caption1" />
                <img src="pic/2.jpg" alt="" title="#caption3" />
                 <img src="pic/4.jpg" alt="" title="#caption2" />
                <img src="pic/3.jpg" alt="" title="#caption4" />                
            </div>
            <div id="caption1" class="nivo-html-caption">
            	<h1>زبانکده شریعتی با بیش از ده سال سابقه تدریس زبانهای خارجی</h1>
                <p dir="rtl">برگزاری کلاس های آمادگی آزمونهای مختلف</p>
            </div>
            <div id="caption2" class="nivo-html-caption">
                <h1>برگزاری کلاسهای آموزش مربی</h1>
                <p dir="rtl">با استفاده از جدیدترین متدهای روز دنیا </p>
            </div>
            <div id="caption3" class="nivo-html-caption">
                <h1>برگزاری کلاس های آموزش کودکان</h1>
                <p dir="rtl">استفاده از ابزارهای کمک آموزشی جذاب </p>
            </div>
            <div id="caption4" class="nivo-html-caption">
                <h1>محیط آموزشی شیک و مدرن </h1>
                <p dir="rtl">برای رده های سنی متفاوت</p>
            </div>
        </div>
        <div class="button_box">
        	<a href="register.php" class="button blue">ثبت نام اینترنتی</a>
            <a href="nazarsanji.php" class="button black">فرم رضایت سنجی </a>
             </div>
       
        <script type="text/javascript" src="funcs/jquery-1.6.3.min.js"></script>
		<script type="text/javascript" src="funcs/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
			effect: 'fade',
			controlNav: true, // 1,2,3... navigation
            directionNav: false,
			animSpeed: 800, // Slide transition speed
	        pauseTime: 4000, // How long each slide will show
			});
        });
        </script>	
    </div> <!-- END of slider -->
</div>
    <div id="tooplate_main">
    	<div id="home_about">
        	<h1>Idiom of the Day<img src="pic/9_orig.png" width="40" height="40"/></h1>
            <h2><img src="pic/tag.png" /> I owe you one</h2>
          <p><font color="#4C55F6" size="+3">M</font>eaning: You can say"I owe you one", when someone has done something for you and you'd be happy to return the favour one day. </p>
        </div>
        <a name="course"></a>
        <div align="center"> <img src="pic/Teacher-Icon2.png" width="100" height="100"/><br />دوره های آموزشی</div>
        <br />
        <div class="content_wrapper content_mb_60">
        	<div class="col_4">
            	<img src="pic/children-course.jpg" alt="image" class="img_border img_border_b img_nom" />
                <p align="center">دوره ویژه کودکان  <br /></p><?php echo"<a href=kids.php?id=4  target=_parent >ادامه مطلب...</a>"?>
            </div>
            <div class="col_4">
            	<img src="pic/5555.jpg" alt="image" class="img_border img_border_b img_nom" />
                <p align="center">دوره مترجمی کاربردی <br /></p><?php echo"<a href=motarjemi.php?id=3  target=_parent >ادامه مطلب...</a>"?>
            </div>
            <div class="col_4">
            	<img src="pic/9797.jpg" alt="image" class="img_border img_border_b img_nom" />
                <p align="center">دوره ویژه بزرگسالان</p><br /><?php echo"<a href=adults.php?id=2  target=_parent >ادامه مطلب...</a>"?>
            </div>
            <div class="col_4 no_margin_right">
            	<img src="pic/ieltsimg.jpg" class="img_border img_border_b img_nom" />
                <p align="center" dir="rtl">دوره های IELTS</p>
                <?php echo"<a href=ielts.php?id=1  target=_parent >ادامه مطلب...</a>"?>
            </div>
        </div>
  		<div class="content_wrapper">
            <div class="col_2" align="right">
            <a name="news"></a>
            <center><img src="pic/22221.png" width="50" height="50"/></center>
                <div id="news"><h2><div id="news">اخبار زبانکده</h2></div>
                <br />
                <div id="news2" class="col_2">
                <font dir="rtl">
                <br />
          
<?php
$host="localhost";
$db="english_institute";
$username="root";
$pass="";
try
{
$connect=new PDO("mysql:host=$host;dbname=$db",$username,$pass);
$connect->query("set character set utf8");

}
catch(PDOException $error)
{
	echo "ERROR in connect to database".$error; 
}
$id=1;
$sql="select * from news";
$result=$connect->query($sql);
foreach($result as $rows)
{
	echo "<div id=kadr>";
 echo "<a href=news.php?id=".$rows["id"]." target=frame> <p>".$rows["onvan"]."</p></a>";
echo "</div>"; 
}

?> 
</div>               

        
            </div>
            
            </font>
             <div class="col_2 no_margin_right">
            <iframe id="frame" name="frame" src="news2.php">
        </iframe>
        </div>
         </div>
        <div class="clear h30"></div>
        <div style="display:none;" class="nav_up" id="nav_up"></div>
    </div>    <!-- END of tooplate_main -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_4" dir="rtl">
        	<h4>صفحات </h4>
            <ul class="nobullet bottom_list" dir="rtl">
            	<li><a href="#l">صفحه اصلی</a></li>
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

<script src="funcs/scroll-startstop.events.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		var $elem = $('#content');
		
		$('#nav_up').fadeIn('slow');
		
		$(window).bind('scrollstart', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
		});
		$(window).bind('scrollstop', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'1'});
		});
		
		$('#nav_up').click(
			function (e) {
				$('html, body').animate({scrollTop: '0px'}, 800);
			}
		);
	});
</script>

</body>

</html>