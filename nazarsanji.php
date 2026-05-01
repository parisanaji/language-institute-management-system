<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فرم رضایت سنجی</title>
<link rel="stylesheet" href="login-css.css">
<meta name="keywords" content="" />
<meta name="description" content="" />
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
<style type="text/css">
#top
{
	height:auto;
	background:rgba(107,99,99,1.00);
	color:white;
	font-size:16px;
	padding:5px;
	border-radius:5px;
}
body
{
	font-family:"B Homa" !important;
	
	
}
#asli
{
	background-color:rgba(224,230,243,1.00) !important;
}
#pic
{
	border-radius:15px;
	opacity:.3;
}
#send
{
	float:left;
	margin-left:250px;
	text-align:right;
}
ul li a:hover
{
	color:rgba(28,243,247,1.00)!important;
}

#ekhtiyari 
{

	text-align:center;
	width:300px;
	border:solid rgba(45,105,160,1.00) !important;
	border-radius:15px !important;
	border-width:2px !important;
	padding:15px;
	float:right;
	margin-right:130px;
}
#form
{
	float:left;
	margin-left:305px;
	text-align:center;
	width:300px;
	border:solid rgba(45,105,160,1.00) !important;
	border-radius:15px !important;
	border-width:2px !important;
	padding:15px;
	
}

#promptok
{
	border:solid 2px rgba(21,18,18,1.00);
	text-align:center;
	background:rgba(142,231,87,1.00);
	color:rgba(0,0,0,1.00);
	direction:rtl;
}
#promptno
{
	border:solid 2px rgba(35,33,33,1.00);
	text-align:center;
	background:rgba(248,119,121,1.00);
	color:rgba(7,7,7,1.00);
	
}
#dakheli
{
	font-size:16px !important;
	text-align:right !important;
}
#promptok
{
	border:solid 2px rgba(21,18,18,1.00);
	text-align:center;
	background:rgba(142,231,87,1.00);
	color:rgba(0,0,0,1.00);
	direction:rtl;
}
#promptno
{
	border:solid 2px rgba(35,33,33,1.00);
	text-align:center;
	background:rgba(248,119,121,1.00);
	color:rgba(7,7,7,1.00);
	
}
</style>
</head>
<body id="asli" >
<a name="top"></a>
<div id="tooplate_header">
    <a href="index.php" class="sitetitle">زبانکده شریعتی</a>  
    <div id="tooplate_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">صفحه اصلی</a></li>
            <li><a href="#">ورود اعضا</a>
                <ul>
                    <li><a href="admin/admin_login.php">مدیران</a></li>
                   
                    <li><a href="teachers/tea.login.php">اساتید</a></li>
                     <li><a href="students/stu-login.php">زبان آموزان</a></li>
                                                                                            
                </ul>
            </li>
           <li><a href="#">محصولات آموزشی</a>
                <ul>
                    <li><a href="vocab/vocab.php">لغات روز</a></li>
                    <li><a href="english_videos/english_videos.php">فیلم آموزشی</a></li>
                    <li><a href="nashriyat/nashriyat.php">نشریات انگلیسی</a></li>
                </ul>
            </li>
           
               
            <li id="black"><a href="#">درباره ما</a>
           <ul>
                    <li><a href="moarefi_asatid.php">معرفی اساتید</a></li>
            
            </ul>               
           </li> 
        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->      
</div> <!-- END of header -->
<?php    
 if(isset($_GET["error"]))
{
	echo "<div id=promptno><font   size=+1>"."متاسفانه ارسال نظر انجام نشد"."</font></div>";
	
}
if(isset($_GET["add"]))
{
	echo "<div id=promptok><font  size=+1>"."ثبت نظر با موفقیت انجام شد"."<br></div>";
	
}

?>
 <form id="form1" name="form1" method="get" dir="rtl" action="chech-nazar.php" enctype="multipart/form-data">
 <br>
 <div id="ekhtiyari">
  <div id="top">زبان آموز گرامی<br> ضمن سپاس از حضور گرم سرکار عالی / جنابعالی در موسسه شریعتی ، پرسشنامه ای که در پیش رو دارید صرفا جهت انجام یک پروژه تحقیقاتی سنجش رضایت زبان آموزان و در راستای بهبود کیفیت خدمات بوده و اطلاعات شما محرمانه باقی می ماند. خواهشمند است به سوالات ذیل به صورت دقیق پاسخ دهید.</div>
  <ul><li id="dakheli"> مشخصات شما</li></ul>
 <label for="flname">نام و نام خانوادگی-اختیاری</label><input type="text" name="flname" id="flname">
  <label for="age">سن</label><input type="text" name="age" id="age">
 <label for="sex">جنسیت</label><select name="sex" id="sex"><option>مونث</option><option>مذکر</option></select>
 <label for="course">دوره آموزشی</label><select name="course" id="course"><option>beginner</option><option>elementary</option><option>pre-intermediate</option><option>intermediate</option><option>upper-intermediate</option><option>IELTS</option></select>
 <br>
 <label for="term-num">تعداد ترم حضور در موسسه شریعتی</label><input type="text" name="term-num" id="term-num">
   </div>  
<div id="form">
<ul><li id="dakheli">کیفیت آموزشی</li></ul>
<label for="tadris">نحوه تدریس اساتید</label><select name="tadris" id="tadris"><option>خوب</option><option>بد</option><option>متوسط</option></select>
<label for="raftar">رفتار و کردار اساتید</label><select name="raftar" id="raftar"><option>خوب</option><option>بد</option><option>متوسط</option></select>
<label for="exam">امتحانات چه اندازه به سنجش دانش زبانی شما کمک کرده است </label><select name="exam" id="exam"><option>زیاد</option><option>کمی</option><option>اصلا</option></select>
<ul><li id="dakheli">ثبت شکایات</li></ul>
<label for="comment">مهم ترین نقطه ضعف آموزشکده زبان شریعتی از نظر شما چیست؟</label><textarea name="comment" id="comment" ></textarea>
<br><br>
<br>
<br>
<input type="submit" name="btn" id="btn" value="ارسال">
<br><br><br>
</div>
 </form>

 </div>
 <br>

 <br>
 <div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_4" dir="rtl">
        	<h4>صفحات </h4>
            <ul class="nobullet bottom_list" dir="rtl">
            	<li><a href="index.php">صفحه اصلی</a></li>
                <li><a href="#top">ورود اعضا</a></li>
                <li><a href="#top">محصولات آموزشی</a></li>
                <li><a href="#top">درباره ما</a></li>
           
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
        
       <div align="left" class="col_4">Copyright ©</div>
        <div align="right" class="col_34" > طراحی توسط نیلوفر مظلومیان و پریسا ناجی</div>
    </div>
</div>
</body>

</html>