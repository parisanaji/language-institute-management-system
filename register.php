<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ثبت نام</title>
<link rel="stylesheet" href="login-css.css">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="funcs/jquery-1.6.3.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="funcs/ddsmoothmenu.js">





<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="funcs/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<style type="text/css">
#top
{
	height:40px;
	background:rgba(107,99,99,1.00);
	color:white;
	font-size:24px;
	padding:5px;
	border-radius:5px;
}
body
{
	font-family:"B Homa" !important;
	
	
}
ul li a:hover
{
	color:rgba(28,243,247,1.00)!important;
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

#form
{

	text-align:center;
	width:350px;
	border:solid rgba(45,105,160,1.00) !important;
	border-radius:15px !important;
	border-width:2px !important;
	padding:15px;
	float:right;
	margin-right:100px;
}

#photo
{
	border-radius:15px;
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
<a name="top"></a>
<body id="asli" >
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
           <li><a href="gallery.html">محصولات آموزشی</a>
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
<br>
<div id="send"><font size="+1" color="#CD5052">پر کردن کادرهای ستاره دار الزامی می باشد
</font><img src="pic/tag.png" width="20" height="20"/>
<br>
<br>
 <?php
 include "funcs/func.php";
 if(isset($_GET["erroradd"]))
{
	echo "<div id=promptno><font    size=+1>"."متاسفانه ثبت نام انجام نشد"."</font></div>";
}
 if(isset($_GET["empty"]))
{
	echo "<div id=promptno><font   size=+1>"."لطفا همه کادرها را پرکنید"."</font></div>";
	
}
if(isset($_GET["add"]))
{
	echo "<div id=promptok><font  size=+1>"."ثبت نام با موفقیت انجام شد"."<br>";
	echo "کد ثبت نام :".$_GET["reg-code"]."</font></div>";
}

 ?>
 <br> 
 <br>
 <br> 
 <br><br> 
 <br>
<img src="pic/4ddc75f1698994d05cf43f2316d7d33a_XL.jpg" width="400" height="500"/>
  </div>
 <div id="form" dir="rtl"><div id="top">فرم پیش ثبت نام اینترنتی</div>
 <form id="form1" name="form1" method="post" dir="rtl" action="check-reg.php" enctype="multipart/form-data">
 <br>
   <label for="name" >نام :</label>
   *<input type="text" name="name" id="name" class="">
    <label for="family">نام خانوادگی :</label>
   *<input type="text" name="family" id="family" class="form-control">
    <label for="ttavalod">تاریخ تولد :</label>
   *<input type="text" name="ttavalod" id="ttavalod" class="form-control">
   <label for="sex">جنسیت:      </label>
   *<select name="sex" id="sex" class="form-control">
   <option>زن</option>
   <option>مرد</option>
   </select>
  <label for="melicode">کد ملی :</label>
   *<input type="text" name="melicode" id="melicode" class="form-control">   
 <label for="city">استان:</label>
  * <select name="city" id="city"class="form-control" >
   <option>تهران</option>
   <option>البرز</option>
   <option>اصفهان</option>
   <option>خراسان شمالی</option>
   <option>خراسان جنوبی</option>
   <option>آذربایجان شرقی</option>
   <option>آذربایجان غربی</option>
   <option>فارس</option>
   <option>قم</option>
   <option>اردبیل</option>
   </select> 
    <label for="email">پست الکترونیکی :</label>
   <input type="text" name="email" id="email" class="form-control"> 
    <label for="celphone">تلفن همراه :</label>
   <input type="text" name="celphone" id="celphone" class="form-control">
    
    <label for="phone">تلفن ثابت :</label>
   *<input type="text" name="phone" id="phone" class="form-control">
  <label for="degree">مدرک تحصیلی :</label>
   *<input type="text" name="degree" id="degree" class="form-control">
   
    <label for="year">سال اخذ :</label>
   <input type="text" name="year" id="year" class="form-control">
   <label for="courses">دوره مورد نظر:</label>
   *<select name="courses" id="courses" class="form-control">
   <option>Beginner</option>
   <option>Elementary</option>
   <option>pre-intermediate</option>
   <option>intermediate</option>
   <option>Upper intermediate</option>
   </select>
   <br>
  <label for="file" >انتخاب تصویر</label>
   * <input type="file" name="file" id="file">
    <br>
   <br>
   <input type="submit" value="ثبت نام" id="reg-btn" name="reg-btn" class="form-control alert-info">        
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