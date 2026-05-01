<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>نشریات انگلیسی</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<style type="text/css">
ul li a:hover
{
	color:rgba(28,243,247,1.00)!important;
}

#news
{
	width:250px;
	text-align:right;	
	padding:5px;
	font-size:12px;
	margin-right:30px;
	float:right;
	background:rgba(132,176,228,1.00);
	
	
}

#black
{
	background:rgba(85,77,77,1.00);
}
#frame
{
	width:800px;
	height:auto;
	background:rgba(227,228,229,1.00);
	float:right;
	margin-right:20px;
	text-align:right;
	margin-top:0px;
	padding:5px;
	
}
#matlab
{
	padding:5px;
	height:auto;
	width:400px;
	float:left;
	margin-left:20px;
	direction:rtl;
}
#links 
{
	width:250px	;
	text-align:left;	
	padding:5px;
	font-size:14px;
	margin-right:30px;
	float:right;
	background:rgba(227,228,229,1.00);
	text-decoration:none;
	
}
#links2
{
	width:250px	;
	text-align:right;	
	padding:5px;
	font-size:12px;
	margin-right:30px;
	float:right;
	background:rgba(227,228,229,1.00);
	
	direction:rtl;
	
}
#links2 a
{
	text-decoration:none;
}
#links a
{
	text-decoration:none;
}

</style>
<link href="../style.css" rel="stylesheet" type="text/css" />

<script src="../funcs/jquery-1.6.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/ddsmoothmenu.css" />

<script type="text/javascript" src="../funcs/ddsmoothmenu.js">

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

<link rel="stylesheet" href="../css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="../funcs/slimbox2.js"></script> 

<link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
<header>
</header>
<div id="tooplate_header">
    <a href="index.php" class="sitetitle">زبانکده شریعتی</a>  
    <div id="tooplate_menu" class="ddsmoothmenu">
        <ul>
            <li ><a href="../index.php" class="selected">صفحه اصلی</a></li>
            <li><a href="#">ورود اعضا</a>
                <ul>
                    <li><a href="../admin/admin_login.php">مدیران</a></li>
                    <li><a href="../students/stu-login.php">زبان آموزان</a></li>
                    <li><a href="../teachers/tea.login.php">اساتید</a></li>
                                                                                            
                </ul>
            </li>
            <li id="black"><a href="#">محصولات آموزشی</a>
                <ul>
                    <li><a href="../vocab/vocab.php">لغات روز</a></li>
                    <li><a href="../english_videos/english_videos.php">فیلم آموزشی</a></li>
                   
                </ul>
            </li>
   
          <li ><a href="#">درباره ما</a>
           <ul>
                    <li><a href="../moarefi_asatid.php">معرفی اساتید</a></li>
            
            </ul>               
           </li> 
        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->      
</div> <!-- END of header -->

<br />
<p><div id="frame"><font size="+1"<p >متن خبر انگلیسی با ترجمه</p></font><hr />
<?php
include "../funcs/connect.php";
$sql3="select count(*) from nashriyat";
$result3=$connect->query($sql3);
$num=$result3->fetchColumn();
if($num<=5)
{
$sql="select * from nashriyat";
$result=$connect->query($sql);
foreach($result as $rows)
{
	echo "<img src=pic/".$rows["photo"]." />";
	echo "<div id=matlab><font size=+1 color=blue>".$rows["onvan"]."</font><br><br>";
	echo "<a href=nashriyat2.php?id=".$rows["id"]."><button name=more >مشاهده مطلب</button></a></div><hr>";
}
}
else
{
	$sql="select * from nashriyat where id<=5";
$result=$connect->query($sql);
foreach($result as $rows)
{
	echo "<img src=pic/".$rows["photo"]." />";
	echo "<div id=matlab><font size=+1 color=blue>".$rows["onvan"]."</font><br><br>";
	echo "<a href=nashriyat2.php?id=".$rows["id"]."><button name=more >مشاهده مطلب</button></a></div><hr>";
}
	echo "<center><a href=more.php><input type=submit value='مطالب بیشتر'></a></center>";
}
?>

</div></p>

<p><div id="news" >روزنامه های انگلیسی زبان جهت تقویت زبان انگلیسی</div></p>
<br />


<p><div id="links"><a href="www.tehrantimes.com" >Tehran Times</a><br />
<a href="www.pressdemo.com" >Santa Rosa Press Democrat</a><br />
<a href="www.dailyrepublication.com" >Daily Republication</a><br />
<a href="www.swtimes.com" >South West Time Record</a><br />
</div></br></p><br />
<p><div id="news" >متن خبر انگلیسی با ترجمه</div></p>
<br />

<?php
$sql2="select * from nashriyat";
$result2=$connect->query($sql2);
foreach($result2 as $rows2)
{
echo "<p><div id=links2 ><a href=nashriyat2.php?id=".$rows2["id"].">".$rows2["onvan"]."</a><br /></div>
";
}
?>
</div></br></p><br />
<p><div id="news" >روز نامه </div></p>
<p ><div id="links" dir="rtl"><a href="../resources/tehrantimes.pdf">قسمتی از روزنامه TehranTimes به همراه ترجمه</a></p></div>
<p><div id="news" >English Stories</div></p>
<p><div id="links"><a href="../resources/Carnival - Penguin Readers.pdf"><img src="../pic/Carnival---Penguin-Readers.jpg" width="120" height="140" /></a><a href="../resources/April in Moscow.pdf"><img src="../pic/April-in-Moscow.jpg" width="120" height="140" /></a><hr /></p>
<img src="../pic/avatar.png" /></div>
</div></br>
</p><br />

<div id="tooplate_footer_wrapper">
 <div style="display:none;" class="nav_up" id="nav_up"></div>
	<div id="tooplate_footer">
    	<div class="col_4" dir="rtl">
        	<h4>صفحات </h4>
            <ul class="nobullet bottom_list" dir="rtl">
            	<li><a href="../index.php">صفحه اصلی</a></li>
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
<marquee dir="rtl" behavior="alternate" ><img src="../pic/Untitled-1.jpg"/></marquee>

<div id="tooplate_copyright_wrapper">
    <div id="tooplate_copyright">
        
       <div align="left" class="col_4">Copyright © All Rights Reserved</div>
        <div align="right" class="col_34" > طراحی توسط نیلوفر مظلومیان و پریسا ناجی</div>
    </div>
</div>

<script src="../funcs/scroll-startstop.events.jquery.js" type="text/javascript"></script>
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

