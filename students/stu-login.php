<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ورود به پنل زبان آموزان</title>
<link rel="stylesheet" href="login-css.css">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="../funcs/jquery-1.6.3.js"></script> 

<link rel="stylesheet" type="text/css" href="../css/ddsmoothmenu.css" />

<script type="text/javascript" src="../funcs/ddsmoothmenu.js">

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

<link rel="stylesheet" href="../css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="../funcs/slimbox2.js"></script> 

<link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />
<style type="text/css">
body
{
	font-family:"B Homa" !important;
	
}
#asli
{
	background-color:rgba(245,252,253,1.00) !important;
}
ul li a:hover
{
	color:rgba(28,243,247,1.00)!important;
}
#black
{
	background:rgba(85,77,77,1.00);
}
</style>
</head>
<body id="asli" >
<a name="top"></a>
<div class="container" align="center">
<div id="tooplate_header">
    <a href="index.php" class="sitetitle">زبانکده شریعتی</a>  
    <div id="tooplate_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="../index.php" class="selected">صفحه اصلی</a></li>
            <li id="black"><a href="#">ورود اعضا</a>
                <ul>
                    <li><a href="../admin/admin_login.php">مدیران</a></li>
                   
                    <li><a href="../teachers/tea.login.php">اساتید</a></li>
                                                                                            
                </ul>
            </li>
            <li><a href="#">محصولات آموزشی</a>
                <ul>
                   <li><a href="../vocab/vocab.php">لغات روز</a></li>
                    <li><a href="../english_videos/english_videos.php">فیلم آموزشی</a></li>
                    <li><a href="../nashriyat/nashriyat.php">نشریات انگلیسی</a></li>
                </ul>
            </li>
   
          <li><a href="#">درباره ما</a>
           <ul>
                    <li><a href="../moarefi_asatid.php">معرفی اساتید</a></li>
            
            </ul>               
           </li> 
        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->      
</div> <!-- END of header -->
<br>
<br>
<br>
<div class="col_34">
<img src="../pic/3.jpg" width="700" height="470" id="img" >
</div>

 <div  class="col-lg-6" class="col-md-6"  class="col-xs-6" align="center" id="kadr" align="center"> 
 <img src="../pic/همیار-انرژی-دانش-آموزی-لوگو-300x224.jpg" width="200" height="170"> 
<form id="form1" name="form1" method="post" >
  <p>
  <div id="kadr2">ورود به پنل زبان آموزان</div>
  <br>
  <?php
 include "../funcs/connect.php";
if(isset($_POST["btn"]))
{
	if(empty($_POST["username"]) || empty($_POST["password"]))
	{
	echo '<div id="empty"> کادری خالی میباشد</div>';
	echo '
	<style type="text/css">
	#t1
	{
		background-color:rgba(236,151,152,1.00);	
	}
	#t2
	{
		background-color:rgba(236,151,152,1.00);
	}
	</style>
	';	
	}
	else
	{
		$sql="select * from students where username=? and password=?";
		$result=$connect->prepare($sql);
		$result->bindValue(1,$_POST["username"]);
		$result->bindValue(2,$_POST["password"]);
		$result->execute();
		$nums=$result->fetchColumn();
		if($nums!=0)
		{
		$_SESSION["stu-login"]=1;
		header("location:stu-pannel.php?user=$_POST[username]");
		exit;
		}
		else
		{
			echo '<div id="empty">اطلاعات اشتباه وارده شده است </div>';
			echo '
	<style type="text/css">
	#t1
	{
		background-color:rgba(236,151,152,1.00);	
	}
	#t2
	{
		background-color:rgba(236,151,152,1.00);
	}
	</style>
	';	
			
		}
		
	}
}

?>
 
  <div class="form-group" align="center">
    <label for="t1">Username:</label>
    <input type="text" name="username" id="t1" class="form-control input-lg" >
    </div>
  <div class="form-group">
    <label for="t2">Password:</label>
    <input type="password" name="password" id="t2" class="form-control input-lg" >
 </div>
    <input type="submit" name="btn" id="btn" value="login" class="btn btn-info" > 
</form>
<br>
 </div>
 </div>
 <br>
 <br>
 <br>
 <div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_4" dir="rtl">
        	<h4>صفحات </h4>
            <ul class="nobullet bottom_list" dir="rtl">
            	<li><a href="../index.php">صفحه اصلی</a></li>
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
<marquee dir="rtl" behavior="alternate" ><img src="../pic/Untitled-1.jpg"/></marquee>

<div id="tooplate_copyright_wrapper">
    <div id="tooplate_copyright">
        
       <div align="left" class="col_4">Copyright ©</div>
        <div align="right" class="col_34" > طراحی توسط نیلوفر مظلومیان و پریسا ناجی</div>
    </div>
</div>
</body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../bootstrap/js/jquery.form.js"></script>
<script src="../bootstrap/js/bootstrap.min.js">
</html>