-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 04:27 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `english_institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `family` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `degree` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `age` varchar(2) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `tell` varchar(11) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `family`, `degree`, `age`, `email`, `username`, `password`, `tell`) VALUES
(4, 'پریسا', 'ناجی', 'کارشناسی', '24', 'parissa@gmail.com', 'admin2', '456', '09126547893'),
(6, 'نیلوفر', 'مظلومیان', 'کارشناسی ارشد', '25', 'n.mazi12345@gmail.com', 'admin3', '123', '09121662547');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(4) NOT NULL,
  `flname` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `age` varchar(3) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `sex` varchar(5) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `course` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `numterm` varchar(5) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `tadris` varchar(10) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `raftar` varchar(10) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `exam` varchar(10) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `shekayat` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `flname`, `age`, `sex`, `course`, `numterm`, `tadris`, `raftar`, `exam`, `shekayat`) VALUES
(3, '', '23', 'مونث', 'beginner', '4', 'خوب', 'خوب', 'زیاد', 'وسایل گرمایشی کیفیت مناسبی ندارند'),
(2, 'n', '30', 'مونث', 'upper-intermediate', '10', 'خوب', 'متوسط', 'زیاد', 'کلاس ها با تاخیر تشکیل می شود '),
(4, '', '', 'مونث', 'beginner', '', 'خوب', 'خوب', 'زیاد', ''),
(5, '', '', 'مونث', 'beginner', '', 'خوب', 'خوب', 'زیاد', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `stuid` int(11) NOT NULL,
  `course` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `examDate` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `point` int(3) NOT NULL,
  `teacherName` varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `stuid`, `course`, `examDate`, `point`, `teacherName`) VALUES
(1, 14, 'beginner', '4/10/95', 87, ' فرهادعظیمی'),
(2, 14, 'pre-intermediate', '7/12/95', 80, ' فرهادعظیمی'),
(3, 16, 'beginner', '4/10/95', 48, ' فرهادعظیمی'),
(4, 16, 'beginner', '4/12/95', 70, 'فرهادعظیمی'),
(5, 56, 'pre-intermediate', '4/10/95', 78, 'مهتاباکرمی'),
(7, 98, 'beginner', '4/10/95', 80, 'فرهادعظیمی'),
(8, 98, 'pre-intermediate', '4/11/95', 70, ' رضاعلیپور'),
(9, 98, 'intermediate', '4/12/95', 45, 'مهتاباکرمی'),
(12, 258, 'beginner', '4/12/95', 65, 'فرهادعظیمی'),
(11, 258, 'pre-intermediate', '4/11/95', 50, 'فرهادعظیمی'),
(13, 258, 'elementary', '4/9/95', 80, 'فرهادعظیمی'),
(14, 16, 'elementary', '4/9/95', 65, 'فرهادعظیمی'),
(15, 16, 'pre-intermediate', '4/11/95', 70, 'فرهادعظیمی'),
(16, 56, 'beginner', '4/10/95', 65, 'فرهادعظیمی'),
(17, 56, 'elementary', '4/12/95', 72, 'فرهادعظیمی'),
(18, 19, 'beginner', '4/12/95', 40, 'فرهادعظیمی');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sendid` varchar(4) COLLATE utf8_persian_ci NOT NULL,
  `reciever` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `matn` varchar(512) COLLATE utf8_persian_ci NOT NULL,
  `onvan` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(150) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sendid`, `reciever`, `matn`, `onvan`, `type`) VALUES
(8, '16', 'عظیمی', 'لطفا در نمره من تجدید نظر کنید', 'نمره', 'اساتید'),
(24, '88', 'علیزاده', 'تا جند روز آینده اعلام خواهد شد', 'پاسخ', 'زبان آموزان'),
(13, '25', 'اکرمی', 'نمره امتحان میان ترم من لحاظ نشده است ', 'نمره امتحان', 'اساتید'),
(25, '98', 'عظیمی', 'با عرض سلام و خسته نباشید ،آیا ساعت کلاس های قابل تغییر هستند؟', 'ساعت کلاس ', 'اساتید'),
(27, '4', 'مظلومیان', 'با عرض سلام و خسته نباشید ،آیا ساعت کلاس های قابل تغییر هستند؟', 'درخواست ', 'مدیران'),
(29, '4', 'رضایی', 'امکان تغییر نمرات وجود ندارد', 'نمره فاینال', 'زبان آموزان'),
(23, '98', 'علیپور', 'لطفا نمرات میانترم را اعلام کنند با تشکر', 'اعلام نمرات میانترم ', 'اساتید'),
(26, '4', 'علیزاده', 'تا جایی که اطلاع دارم خیر، ولی می توانیداز مدیریت هم سوال کنید', 'پاسخ', 'زبان آموزان'),
(28, '6', 'عظیمی', 'خیر', 'پاسخ', 'اساتید'),
(30, '4', 'ناجی', 'لطفا با درخواست بنده در رابطه با اضافه حقوق موافقت کنید', 'درخواست اضافه حقوق', 'مدیران\r\n	\r\n	'),
(31, '4', 'عظیمی', 'به زودی انجام خواهد شد', 'پاسخ', 'اساتید'),
(33, '258', 'عظیمی', 'با عرض سلام و خسته نباشید درمورد نمره intermediate اعتراض دارم', 'اعتراض به نمرات', 'اساتید'),
(34, '4', 'حسینی', 'نمرات کاملا درست محاسبه شده و عادلانه می باشد', 'پاسخ', 'زبان آموزان'),
(35, '258', 'اکرمی', 'آیا شما ترم بعد کلاس دارین', '', 'اساتید'),
(37, '4', 'مظلومیان', 'درخواست تغییر ساعات کلاس های IELTS را دارم', 'درخواست', 'مدیران\r\n	\r\n	'),
(38, '75', 'مظلومیان', 'با عرض سلام و وقت بخیر درخواست اضافه کردن تایم کلاس های روز شنبه را دارم', 'درخواست اضافه کردن کلاس ها', 'مدیران\r\n	\r\n	'),
(39, '4', 'ناجی', 'asdf', 'asf', 'مدیران\r\n	\r\n	'),
(40, '4', 'ناجی', 'asdfaf', 'dsfs', 'مدیران\r\n	\r\n	'),
(41, '4', 'رضایی', 'daryaft shod', 'پاسخ', 'زبان آموزان');

-- --------------------------------------------------------

--
-- Table structure for table `nashriyat`
--

CREATE TABLE `nashriyat` (
  `id` int(11) NOT NULL,
  `onvan` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `matnfarsi` text COLLATE utf8_persian_ci NOT NULL,
  `matnlatin` text COLLATE utf8_persian_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `nashriyat`
--

INSERT INTO `nashriyat` (`id`, `onvan`, `matnfarsi`, `matnlatin`, `photo`) VALUES
(1, 'آموزش زبان انگلیسی بااخبار فناوری دوربین ساده گوگل کلیپس', 'شاید ب توان بزرگ‌ترین شگفتی رویداد سخت‌افزاری اخیر کمپانی گوگل را معرفی دوربین کلیپس (Clips) دانست. این محصول یک دوربین مستقل مبتنی بر هوش مصنوعی است که می‌تواند تا سه ساعت ویدیو و عکس ثبت کند و سپس به‌طور خودکار بهترین لحظات ثبت‌شده را برای شما انتخاب کند. در حال حاضر نمی‌توان گفت کلیپس در بازار چه عملکردی از خود نشان خواهد داد؛ اما از نظر فنی این دوربین یک محصول شگفت‌انگیز است.\r\nوب‌ سایت تک‌کرانچ در این رابطه با مدیر محصول کلیپس، جاستین پین، گفتگویی انجام داده است. پین در این گفتگو اشاره کرده که دوربین کلیپس یک لوازم‌ جانبی برای گوشی‌های سری پیکسل نیست. وی در این رابطه این‌گونه توضیح داده است: “باید بگویم این محصول یک لوازم جانبی محسوب نمی‌شود. کلیپس یک دوربین مستقل است؛ این دستگاه یک نوع دوربین جدید است. در حقیقت هوش مصنوعی در خود این محصول قرار داده شده و بدین ترتیب این دوربین می‌تواند تصمیم بگیرد که تصاویر یا ویدیوها چه موقع ثبت شوند؛ این ویژگی اهمیت بسیار زیادی دارد زیرا کاربران می‌توانند با بهره گرفتن از آن کنترل کاملی روی دوربین داشته باشند.”\r\nدوربین کلیپس بر خلاف محصولی مثل گوگل هوم – که کاملا بر اتصال به فضای ابری متکی است – خود یک واحد کاملا مستقل محسوب می‌شود. این دوربین از شما عکس می‌گیرد (به‌عنوان مثال زمانی که در اتاق خانه در حال بازی با کودکان خود هستید) و سپس با بهره گرفتن از الگوریتم‌های یادگیری ماشینیِ از پیش آموزش داده ‌شده، بهترین نمونه‌ی عکس ثبت‌شده را پیدا می‌کند و سپس به‌طور خودکار کلیپ‌هایی از بهترین تصاویر ثبت‌ شده برای شما تولید خواهد کرد.\r\n\r\n ', 'Maybe the biggest surprise of Google’s hardware event today was the launch of Clips, a small stand-alone AI-driven camera that can capture up to three hours of video and images and then automatically select the best moments for you. I’m not sure how well Clips will do in the marketplace, but technically, it’s a fascinating product.\r\nDuring my conversation with Clips product lead Justin Payne, he repeatedly stressed that Clips is not an accessory to the Pixel — or anything else, really. “It’s an accessory to anything, I’d say. It’s a stand-alone camera. A new type of camera and insofar as that any digital camera has become an accessory to a computer or a phone, so too with this,” he said. “The reason for that comes back to the fact that the intelligence is built into the device to decide when to take these shots, which is really important because it gives users total control over it.”\r\nSo unlike a product like Google Home, which fully relies on being connected to the cloud, Clips is pretty much a self-contained unit. It takes your images (probably while you set it down in your living room while you play with your kids), runs its pre-trained machine learning algorithms to find the best ones and then automatically generates your clips and picks your best images for you.', '7-00-310x165.jpg'),
(2, 'آموزش زبان انگلیسی با اخبار موجودات هوشمند فضایی', 'ست شوستاک (Seth Shostak) به عنوان یکی از اخترشناسان ارشد موسسه‌ جستجو‌ی حیات فرازمینی ستی (SETI) از کشف موجودات هوشمند فضایی تا ۲۰ سال آینده خبر داد! موسسه جستجوی هوش فرازمینی یا به اختصار «ستی»، سال‌هاست که تمام تلاش خود را برای پیدا کردن موجودات فضایی به کار گرفته است. اخیرا، یکی از اخترشناسان ارشد ستی از کشف موجودات هوشمند فضایی در کمتر از ۲۰ سال آینده خبر داده و می‌گوید تا آن زمان، صراحتا می‌توان وجود اینگونه موجودات را تایید کرد. البته باید توجه داشت که برقراری ارتباط با آنان، چالشی حل نشده است. تحقیقات موسسه ستی، با هدف جستجوی گوشه و کنار کیهان و پرده‌برداری از موضوعات اسرارآمیز طبیعت آغاز شد و امید است که به زودی نژاد بشر بتواند هم‌نوعان خود را در دنیاهای همسایه پیدا کند.\r\nاین اخترشناس برجسته، برای ادعای خود یک شرط‌بندی جالب را هم تعیین کرد! او در این باره جسورانه اظهار داشت که بشر تا ۲۰ سال آینده به وجود بیگانگان هوشمند پی خواهد برد و شرط بندی یک فنجان قهوه برای همه انسان‌ها را بر سر آن تعیین کرد! او در ابتدای اظهارات خود گفته بود که در حال حاضر شانسی برای کشف موجودات بیگانه نداریم؛ چرا که هنوز هیچ شواهدی از این دسته از موجودات کشف نشده است. اما این احتمال وجود دارد که تا ۲۰ سال آینده، شرایط به نحو دیگری رقم بخورد.\r\nشستاک در ادامه صحبت‌های خود گفت که تاکنون شواهدی قطعی بر وجود حیات فرازمینی کشف نشده است، اما باید در نظر داشت که دانش امروزی بشر از دنیای اطراف خود، نسبت به ۲۰ سال قبل به طرز چشم‌گیری افزایش داشته و همین روند اگر تا سال‌های آینده نیز ادامه یابد، به طور قطع می‌توان گفت که تا کشف موجودات هوشمند فضایی ، مسیر چندانی باقی نمانده است! به عنوان مثال، در دهه‌های گذشته ما از وجود همسایه‌های سنگی خود بی‌اطلاع بودیم، اما امروزه می‌دانیم که شانس وجود حیات هوشمند در کهکشان راه‌ شیری نیز کم نیست!\r\nست شوستاک در مورد کشف حیات در ماورای زمین و جستجو در نقاط ناشناخته جهان اظهار داشت:\r\nممکن است که در آینده‌ای نزدیک، حتی به حیات میکروبی نیز دست پیدا کنید. حیات میکروبی، گونه‌ای از نشانه‌های زندگی است که شما می‌توانید آن را در جای جای کره زمین و یا گوشه حمام خانه‌ خود پیدا کنید. تصور من بر این است که حتی این احتمال وجود دارد که اکتشافات بزرگ‌تری را نیز در زمانی کوتاه به دست آوریم. حتی می‌توان گفت که عمر ما برای کشف موجودات هوشمند فضایی کفاف خواهد داد!\r\nبا وجود آنکه شوستاک بر این موضوع باور دارد، اما باید در نظر گرفت که امکان برقراری ارتباط با موجودات فضایی بسیار سخت و پیچیده‌تر از آن است که تصورش را می‌کنیم. در چند دهه اخیر، ساخت فیلم‌های علمی تخیلی، تصورات ما را از سفرهای فضایی تغییر داده‌اند. باید در نظر داشت که دانش امروز بشر برای برقراری ارتباط با بیگانگانی در خارج از منظومه شمسی کافی نیست. اما با این حال، همچنان پرده‌برداری از این مسئله هیجان‌انگیز، یک دستاورد مهم به شمار می‌رود. شوستاک در این باره می‌گوید:\r\nمن در مورد ارتباط با آنان نظری ندارم. برای مثال، سیگنالی نوری از آنان دریافت می‌کنیم و متوجه می‌شویم که برای مثال، این سیگنال ۵۰۰ سال قدمت دارد. زمانی که شما برای آنان پاسخی را ارسال کنید، لازم است که تا ۱۰۰۰ سال بعد، منتظر دریافت پاسخ باشید. این مسئله، برقراری ارتباط نیست؛ چرا که ما تنها از موجودیت آنان کسب اطمینان کرده‌ایم.\r\n\r\n', ' A senior astronomer at the Search for Extra-Terrestrial Intelligence (SETI) Institute believes we are just decades away from confirming the existence of intelligent extraterrestrial life.\r\nThe SETI Institute has spent decades researching and exploring the mysterious, and often unexplained, phenomena of our universe. The enduring hope being that the search will help us confirm that there is, in fact, life out there.\r\nIn an interview with Futurism at the Worlds Fair Nano NY, Seth Shostak, a senior astronomer at the SETI Institute, discussed where we currently are in the search for intelligent extraterrestrial life. He began by boldly stating that he “bet everybody a cup of coffee that we’ll find intelligent life within 20 years When asked what science has to say currently about the existence of aliens, Shostak said, “Very little – because we haven’t found any .Shostak went on to say that while we may not have found evidence confirming extraterrestrial life yet, what we have discovered about our Universe, say, over the last 20 years, has not been insignificant.\r\nIn fact, those findings might mean a lot to our search. One thing we know now that we didn’t know decades ago is that there’s a lot of unexplored cosmic real estate out there. \r\n life beyond Earth Shostak went on to discuss the likelihood and nature of discovering alien life somewhere out there in the as yet uncharted parts of our Universe..\r\n“We may find microbial life – the kind you’d find in the corners of your bathtub. We may find that a lot sooner, but that remains to be seen. But it’s gonna happen, I think, in your lifetime”.\r\n While Shostak is confident that, not just eventually but relatively soon, we will discover the existence of extraterrestrial intelligent life, making ‘contact’ may not go quite according to what we would imagine. What decades of science fiction would have us believe it would be like.\r\n“I don’t know about contact,” Shostak said. “I mean if they’re 500 light years away … you’ll hear a signal that’ll be 500 years old, and if you broadcast back ‘Hi we’re the Earthlings, how’re you doing?’ – it’ll be 1,000 years before you hear back from them. If you ever hear back from them. So, it’s not exactly contact, but at least you know they’re there..”', '06-310x165.jpg'),
(3, 'آموزش زبان انگلیسی با اخبار چرخ کوپنهاک', 'این شرکت نوپا که در یکی از آزمایشگاه‌های شهر سین سیبل ام آی تی شکل گرفت، ازچرخ کپنهاگ که به صورت یک رینگ قرمز رنگ طراحی شده و با استفاده از آن دوچرخه‌های مرسوم، به دوچرخه الکتریکی تبدیل می‌شوند رونمایی کرده است. این طرح تا به حال در ۴۴ ایالت آمریکا در دسترس بود، اما اخیرا مدیران Super pedestrian قصد دارند که محصول خود را در اروپا هم عرضه کنند. با هم نگاهی دقیق‌تر به چرخ کپنهاگ می‌اندازیم:\r\nسازندگان این اختراع شگفت‌انگیز را به صورت مجزا با قیمت ۱۵۰۰ دلار به فروش می‌رسانند، اما اگر خریداری علاقه‌مند به خرید یک محصول کامل باشد، می‌تواند با پرداخت ۲ هزار دلار دوچرخه‌ای زیبا را هم به همراه چرخ کپنهاگ بخرد. شاید در نگاه اول پرداخت ۲ هزار دلار برای یک دوچرخه گران به نظر برسد، ولی جالب است بدانید که دوچرخه‌هایی با کیفیت مناسب و بدون تجهیزات پیشرفته و هوشمند، با قیمتی بیش از هزار دلار به فروش می‌رسند.\r\nمدیرعامل این استارتاپ اسف بیدرمن (Assaf Biderman) در مصاحبه‌ای گفته است که دوچرخه برقی توسعه‌یافته به کمک چرخ کپنهاگ به منظور جایگزینی وسایل نقلیه گران‌قیمت در شهرهای شلوغ که استفاده از یک خودرو در آن‌ها صرفه اقتصادی ندارد،‌ ساخته شده است. بیدرمن در ادامه می‌گوید که مسافت‌های روزانه یک فرد عادی، طولانی‌تر از آن هستند که با یک وسیله غیر موتوری طی شوند.\r\n', 'Super pedestrian, a startup born at MIT’s Senseable City Lab, is launching its first product internationally Called the Copenhagen Wheel, the red-hub wheel can convert any bike into an electric (and smart) mode of transportation. The bike is already available in 44 US states, but Super pedestrian has announced it will sell the Copenhagen Wheel in the United Kingdom and Europe for the first time.Scroll down for a closer look at the product:  \r\nBehold, the Copenhagen Wheel. The wheel can attach to any ordinary bike, but you can also choose to purchase it with a bike as a package deal for roughly $2,000. The wheel alone is the bulk of that cost at $1,500. That may sound like a lot, but high-end bicycles can easily go for $1,000 without the added electric motor. \r\nThe bike is meant to serve as a main mode of transportation in crowded cities where owning a car is too expensive, Super pedestrian CEO Assaf Bider man said in an interview “The distances most people are required to cover on a day-to-day basis, these have grown too large for non-motorized transportation,” Bider man said.   ', '5-00-310x165.jpg'),
(4, 'آموزش زبان انگلیسی با اخبار تلویزیون های OLED ', 'ازال‌جی و لووه تا اسکای‌ورس و چانگ‌هونگ! در نمایشگاه IFA 2017 در برلین، شرکت‌های مختلفی از تلویزیون‌های دیواری رونمایی کردند؛ بنابراین می‌توانیم انتظار داشته باشیم که در سال پیش‌رو چند مدل از این محصولات وارد بازار شوند. امسال و در نمایشگاه ایفا، شرکت‌های مختلفی مانند ال‌جی، لووه، اسکای‌ورس و چانگ‌هونگ از تلویزیون‌های دیواری خود رونمایی کردند. بنابراین می‌توانیم انتظار داشته باشیم که در سال پیش‌رو چند مدل از این محصولات وارد بازار شوند. برخی از شرکت‌ها از «Crystal Sound» استفاده کرده‌اند که قابل مقایسه با اکوستیک سرفیس سونی در تلویوزیون اولد A1 است.\r\nتلویزیون های فوق باریک در حال حاضر ال‌جی تنها شرکتی است که محصولات OLED دیواری درسری w7  خود را به بازار عرضه کرده است. این محصولات بسیار باریک هستند و به‌ صورت مغناطیسی به دیوار می‌چسبند. تمامی پورت‌ها و قطعات الکترونیکی این محصول، روی ساندبار قرار داده شده‌اند. در نمایشگاه ایفا ۲۰۱۷، شرکت ال‌جی در زمینه‌ی تلویزیون‌های دیواری تنها نبود. به نظر می‌رسد پنل‌های تولیدشده توسط ال‌جی آماده‌ی فروش به سایر برندهای فعال در تولید محصولات صوتی و تصویری باشند؛ زیرا چندین شرکت دیگر نیز از محصولات و نمونه‌های اولیه‌ی تلویزیون‌های دیواری خود رونمایی کردند.\r\n', 'From LG and Loewe to Skyworth and Changhong. There were lots of ‘wallpaper OLED’ TVs exhibited at IFA 2017 in Berlin and it appears that we can expect at least some of them to launch next year. Some manufacturers also showcased “Crystal sound”, which is comparable to Sony’s Acoustic Surface in the A1 OLED.\r\nExtremely thin TVsLG is the only company to offer a so-called wallpaper OLED with its W7 range. It is an extremely thin TV that sticks to the wall only using magnets. All ports and electronic components have been relocated to a sound bar.  But at IFA 2017 in Berlin, LG was far from alone. The panels are manufactured by LG. Display – LG’s display panel production division – and if we are not mistaken that the company is ready to sell the panels to outside TV brands. We say this because several companies exhibited products and prototypes.', 'news3-00-310x165.jpg'),
(5, 'آموزش زبان انگلیسی با اخبار لپ تاپ گوگل پیکسل بوک', 'در شرایطی که بسیاری از کاربران در انتظار معرفی نسل جدید کروم بوک پیکسل بودند، لپ تاپ جدید گوگل با نام پیکسل بوک رونمایی شد. این محصول جدید با طراحی ۲ در ۱، علاوه بر لپ تاپ، نقش یک تبلت را هم ایفا کرده و می‌توان آن را چیزی میان لنوو یوگا بوک و سرفیس بوک مایکروسافت در نظر گرفت. همچنین به ادعای گوگل، پیکسل بوک با وزن ۱ کیلوگرم (۲٫۲ پوند) و فریمی به ضخامت تنها ۱۰ میلی‌متر، سبک‌ترین لپ تاپ آنها محسوب می‌شود. طراحی این محصول جدید همانند یک بلوک تخت بوده و در آن کلیدهای بزرگ، ترک پد عریض و صفحه نمایش ۱۲٫۳ اینچی با وضوح ۱۴۴۰p گنجانده شده تا ما با محصولی خاص رو به رو باشیم.\r\nهمچنین بر خلاف سایر سازندگان، گوگل از نمایشگری با نسبت ۳:۲ و حاشیه‌های نسبتا بزرگ استفاده کرده است. نسخه پایه لپ تاپ گوگل پیکسل بوک همراه با نسل هفتم پردازنده‌های Core i5 اینتل، ۸ گیگابایت رم و ۱۲۸ گیگابایت حافظه داخلی، با قیمت ۹۹۹ دلار به فروش خواهد رسید. در صورتی که پول بیشتری برای خرید این محصول جدید در نظر گرفته باشید، می‌توانید نسخه گران‌تر با ۱۶ گیگابایت رم، ۲۵۶ یا ۵۱۲ گیگابایت حافظه داخلی و پردازنده Core i7 را خریداری کنید. سازندگان از دو پورت یو اس بی نوع C نیز استفاده کرده‌اند تا اتصال وسایل جانبی و شارژ دستگاه‌های دیگر امکان‌پذیر باشد.\r\nجدای از طراحی زیبا و سخت افزار قدرتمند، سازندگان با در نظر گرفتن کلیدی اختصاصی برای دستیار صوتی گوگل اسیستنت، هوش مصنوعی را نیز به پیکسل بوک اضافه کرده‌اند. هرچند، پیش‌تر ما محصولاتی با کلید اختصاصی کورتانا را نیز دیده بودیم. اپل هم با توسعه نوار لمسی تاچ بار، سیری را با مک بوک پرو جدید ادغام کرده است. صفحه نمایش ۱۲٫۳ اینچی و لمسی این لپ تاپ، از قلم هوشمند پیکسل بوک پن (Pixel book Pen) که عملکردی مشابه با قلم قدیمی “Wacom” داشته و به صورت جداگانه با قیمت ۹۹ دلار به فروش می‌رسد نیز پشتیبانی می‌کند. قلم هوشمند گوگل که نیروی مورد نیاز خودر را از طریق باتری‌های AAA تامین می‌کند، از حالت نوشتاری زاویه‌دار  پشتیبانی کرده و با تاخیر تنها ۱۰ میلی‌ثانیه، حتی برای نوآوری و انجام کارهای بیشتر با دستیار صوتی نیز سازگاری خواهد داشت. هنوز تعداد اپلیکیشن های اندرویدی که از این قلم پشتیبانی می‌کنند، مشخص نشده است.', 'Google is bringing back the Chromebook Pixel, with a slightly different name. The new Google Pixelbook is a high-end Chromebook 2-in-1 that looks like a cross between a Lenovo Yoga laptop and Microsoft’s Surface Book. Just like the leaks we saw last month, Google’s Pixelbook has a blocky design with big keys, a wide trackpad, and a 12.3-inch display. It’s the new premium Chromebook that we haven’t seen for a couple of years now, and it’s priced starting at $999..\r\nWhile most PC manufacturers are moving to displays with thinner bezels, Google has opted for a tall 12.3-inch display with a 3:2 screen aspect ratio and rather large bezels. On the base model, priced at $999, there’s a 7th generation Intel Core i5 processor, 8GB of RAM, 128GB of storage. There are two USB-C ports for charging or accessories, and if you’re using a Pixel phone you can even set it to automatically tether data.\r\nGoogle is also building its Assistant into this laptop, thanks to a ​ dedicated ​Google Assistant ​key ​you can tap to then talk or type to the assistant. Some PC makers also have a dedicated Cortana key for Windows 10 laptops, and Apple has integrated a Siri key into its MacBook Pro models with the Touch Bar.\r\n\r\nThe 12.3-inch touchscreen display also supports a separate pen, priced at $99,  that acts like a traditional Wacom stylus. The Pixel book Pen includes support for both  pressure or angle, and is powered by AAA batteries. The stylus has only 10ms of latency, and it will work with the Assistant for annotations. It’s not clear how many Android-powered apps will support the stylus, though.', 'news4-00-310x165.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `onvan` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `matn` text COLLATE utf8_persian_ci NOT NULL,
  `tarikh` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `more` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `onvan`, `matn`, `tarikh`, `more`) VALUES
(1, 'برگزارای آزمون های پایان ترم دوره های مختلف', 'این دوره از آزمون ها  با حضور 120 نفر از زبان آموزان این زبانکده در روز بیستم آذرماه برگزار گردید.\r\nزبان آموزان عزیز می توانند نتایج آزمون های کتبی و نهایی را در همین سایت مطالعه کنند.  ', '20/9/96', ''),
(3, 'فراخوان دعوت به گروه تئاتر انگلیسی', 'آموزشگاه زبان شریعتی از اساتید و دانشجویان علاقمند به مقاطع بزرگسالان و نوجوانان با سطح زبان انگلیسی روان و سلیس دعوت می‌نماید، جهت تست صدا و بازیگری رزومه هنری خود را همراه با سه نمونه عکس تمام‌رخ، نیم‌رخ و تمام قد تا پایان وقت اداری روز 28 دی ماه به آدرس:n.mazi@gmail.com ارسال فرمایید.', '10/8/96', ''),
(4, 'جذب مدرس با بیمه و مزایا', '\r\n\r\nمتقاضیانی که تمایل به تدریس در موسسه  با بیمه و مزایای مناسب را دارند ، می توانند برای کسب اطلاعات بیشتر به کانال تلگرام زبانکده مراجعه کنند\r\n\r\n', '', ''),
(5, 'انواع تخفیف های زبانکده', 'اگر دانشجویی در ترم قبل TOP شده و قبل از فاینال ترم جاری و در بازه ی زمانی پیش ثبت نام اقدام به ثبت نام برای ترم بعد نماید در صورتی که در ترم جاری هم دانشجوی TOP باشد برای استفاده از تخفیف دانشجوی TOP بایستی به صورت حضوری به کانتر ثبت نام مراجعه نماید. در غیر اینصورت نرم افزار به صورت اتوماتیک قادر به شناسایی این افراد جهت تخصیص تخفیف نمی باشد.\r\n\r\nدرحال حاضر جهت مددجویان معرفی شده از کمیته امداد، خیریه ها (سروش زندگی، پیام امید و بنیاد دانش) و انجمن حمایت از کودکان کار، ضمن هماهنگی با واحدهای آموزشی بررسیهای لازم جهت استفاده ایشان از تخفیفات انجام می شود.\r\n\r\nتوجه:\r\n\r\n• چنانچه تمایل به استفاده از تخفیف های ارائه شده در آموزشگاه زبان سفیر با توجه به شرایط قید شده در بندهای ذیل هستید، به شعبه مورد نظر مراجعه و اقدام به ثبت نام حضوری نمایید.\r\n • قابل توجه زبان آموزان گرامی ، کلیه تخفیف های قید شده در بند های ذیل تنها در ساعات 8 الی 16:30 و 20:15 الی 21:45 قابل اعمال بوده و کلیه کلاس های تشکیل شده در بازه ی زمانی 16:45 الی 20 مشمول هیچگونه تخفیفی نمی باشد.\r\n\r\nالف)تخفیف 25 درصد\r\n\r\n1- تخفیف ساعت: کلاسهای فشرده د رساعات 14:45-11:30و کلاسهای ترمیک درساعتهای14:45- 13:15 شامل تخفیف 25 درصد در شهریه ثبت نام می باشند.\r\n\r\n2- تخفیف نفر سوم خانواده : چنانچه در یک ترم سه نفر از اعضای درجه یک خانواده ای به صورت همزمان در شعب سفیر مشغول به تحصیل باشند نفر سوم می تواند از 25% تخفیف شهریه ثبت نام در همان ترم استفاده نماید.\r\n\r\n3- تخفیف خانواده فرهنگیان: زبان آموزانی که بستگان درجه یک آنها در استخدام رسمی وزارت آموزش و پرورش ( درحال خدمت / بازنشسته ) هستند ، می توانند با ارائه مدارک ذیل از 25درصد تخفیف شهریه ثبت نام استفاده نمایند.\r\n\r\nمدارک لازم\r\n\r\nدوسری کپی از شناسنامه فرد فرهنگی (صفحه اول و صفحه دوم)\r\n دوسری کپی از فیش حقوقی یا آخرین حکم فرد فرهنگی (برای اولین بار)\r\n دو سری کپی از شناسنامه زبان آموز\r\n نکته: برای ثبت نام در ترمهای بعد یک سری کپی از آخرین فیش حقوقی یا آخرین حکم کافی خواهد بود.\r\n\r\n4- تخفیف خانواده شهداء ، جانبازان و ایثارگران : زبان آموزانی که بستگان درجه یک آنها از شهداء، جانبازان ویا نیروهای ایثارگر هستند ، می توانند با ارائه مدارک ذیل از25درصد تخفیف شهریه ثبت نام استفاده نمایند.\r\n\r\nمدارک لازم\r\n\r\nاصل کارت مخصوص شهداء،جانبازان ونیروهای ایثارگر\r\n دوسری کپی از اصل کارت مخصوص شهداء،جانبازان ونیروهای ایثارگر (برای اولین بار – وسری کپی از شناسنامه زبان آموز و فرد جانباز / ایثارگر( صفحه اول و دوم)\r\n نکته: برای ثبت نام در ترمهای بعد یک سری کپی از کارت مخصوص شهداء و جانبازان کافی خواهد بود.\r\n\r\n5- تخفیف والدین:\r\n\r\nیکی از والدین کلیه زبان آموزانی که در دوره نوجوانان ثبت نام نمایند، می توانند از 25% تخفیف در شهریه ثبت نام در همان ترم استفاده نمایند.\r\n\r\nدر صورت استرداد شهریه هر دو فرد استرداد خواهند شد.\r\n\r\nتبصره 1: تخفیف 25% در کلیه کلاس ها بجز کلاس های SIC، ترجمه، دوره های آیلتس و کلاس هایی که در ساعات 16:45 الی 20 تشکیل می گردند قابل ارائه می باشد.\r\n\r\nتبصره 2:هرزبان آموز تنها می تواند از یک نوع تخفیف در یک ترم استفاده نماید.\r\n\r\nتبصره 3:ازهرخانواده فقط یک نفر می تواند از تخفیف 25% فرهنگیان / خانواده شهداء ، جانبازان ، ایثارگران استفاده نماید.\r\n\r\nتبصره 4: انجام ثبت نام در موعد پیش ثبت نام شرط استفاده از کلیه تخفیف ها می باشد.\r\n\r\nب) تخفیف 50 درصد\r\n\r\nزبان آموزانی که دو ترم متوالی دانشجوی ممتاز کلاس (TOP)می شوند\r\n زبان آموزان فعلی موسسه که همزمان در کلاسهای Free Discussion نیز ثبت نام می کنند، مشمول استفاده از تخفیف 50% در کلاس Free Discussion همان ترم می شوند.\r\n\r\nج)تخفیف 90 درصد\r\n\r\nبستگان درجه یک مدیران\r\n کتابفروشان\r\n پرسنل موسسه\r\n اساتید موسسه\r\n', '15/3/96', ''),
(2, 'برگزاری آزمون های دوره ای IELTS', '\r\n\r\nگروه آزمون های بین المللی ، آزمون های 106 و 107 IELTS Pro-Mock را در تاریخ 1396/09/18 در محل برگزاری آزمون های بین المللی، خیابان شریعتی، خیابان یزدانیان، پلاک 15 برگزار کرد. این آزمون برای مدیران و کارشناسان واحدهای سفیر برگزار شد.\r\n\r\nآزمون نوبت صبح رأس ساعت 9 و آزمون نوبت بعد از ظهر رأس ساعت 14 شروع شد. تعداد شرکت کنندگان این آزمون 86 نفر بود.\r\n\r\nافرادی که قبلا هم در این آزمون شرکت کرده بودند، همانطور که اعلام شده بود، یک ساعت قبل از آزمون در محل برگزاری آزمون حضور داشتند. یکی از مدیران به این موضوع اشاره کرد و گفت آزمون آزمایشی آیلتس از این جهت اهمیت دارد که شرکت کنندگان با تمامی مراحل آزمون، از جمله عکس برداری و مراحل Check-in آشنایی کامل پیدا می کنند.\r\n\r\nآزمون کتبی شامل سه مهارت می باشد، Listening, Reading, writing. در انتهای آزمون Listening شرکت کنندگان 10 دقیقه برای انتقال پاسخ ها به پاسخنامه ها زمان دارند. ولی این در رابطه با آزمون Reading صدق نمی کند. یکی از بازرسان محترم دپارتمان اقماری که مسولیت بازرسی 70 واحد شهرستان را دارد، به اهمیت توجه به دستورالعمل ها اشاره کردند و گفتند دانشجویان در آزمونهای ماک نحوه و زمان بندی پر کردن پاسخنامه ها را یاد می گیرند و اطلاع از این موضوع از این جهت حائز اهمیت است که در بخش ،Reading فرصت اضافه جهت انتقال پاسخ ها داده نمی شود و شرکت کنندگان می بایست حتما در هنگام پاسخ دهی به این مهم توجه داشته باشند.\r\n\r\nدر آزمون نوبت بعد از ظهر، جناب آقای دکتر چمنی، مدیر عامل محترم موسسه زبان سفیر گفتمان، بازدیدی را از سالن آزمون و روند برگزاری آزمون انجام دادند. آقای دکتر چمنی از همکاری مراقبین تشکر و قدردانی کردند.\r\n\r\nآزمون شفاهی در حال حاضر در سالن آزمون های بین المللی تا آخر هفته در حال برگزاری می باشد.\r\n\r\n', '10/9/96', '');

-- --------------------------------------------------------

--
-- Table structure for table `price-course`
--

CREATE TABLE `price-course` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `tozih` text COLLATE utf8_persian_ci NOT NULL,
  `tozih2` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `price-course`
--

INSERT INTO `price-course` (`id`, `name`, `tozih`, `tozih2`) VALUES
(1, 'دوره آموزشی IELTS', 'معرفی IELTS:\r\n\r\nآزمون آیلتس (International English Language Testing System) معتبرترین آزمون بین المللی زبان انگلیسی برای مهاجرت ، کار و تحصیلات دانشگاهی در کشورهای انگلیسی زبان است. این آزمون همه مهارت های انگلیسی (خواندن، نوشتن، شنیدن و صحبت کردن ) را ارزیابی می کند و به گونه ای طراحی شده است که منعکس کننده کاربرد روزمره زبان در تحصیل ،کار و زندگی باشد. یکی از ویژگی های بارز این آزمون بخش شفاهی است که به صورت مصاحبه ای رو در رو با ممتحن بین المللی انجام می شود.\r\nدوره های IELTS در موسسه شریعتی در چهار بخش Post- IELTS , Bridge, IELTS Skills, Pre-IELTS برگزار می گردد. دوره های  Pre-IELTS در 5 مقطع که شامل مقطع پایه (2 ترم)، مقطع مبتدی (4 ترم)، مقطع پیش میانی (4 ترم) و مقطع فوق میانی (4 ترم) و در مجموع 14 ترم 20 جلسه ای برگزار می شوند. دوره های IELTS Skills شامل 4 دوره 10 جلسه ای با تمرکز بر یک مهارت زبانی (Listening, Reading, Speaking and Writing) به صورت مستقل و آمادگی برای آزمون مربوطه هستند. دوره های Bridge و Post- IELTS در 4 ترم 20 جلسه ای با تمرکز بر مهارت های زبانی و با گرایش آزمون آیلتس برگزار می شوند.', '\r\n\r\nهدف اصلی دوره های IELTS آشنایی و آماده سازی هر چه بیشتر و دقیق تر متقاضیان شرکت در آزمون مربوطه در  در بازه زمانی کوتاه می باشد، به طوریکه هر متقاضی با هر دانش و توانش زبانی بتواند طی مدتی معین خود را به نمره مورد نظر برساند. مخاطبین دوره های IELTS  عمدتا” متقاضیان ادامه تحصیل در خارج از ایران، مهاجرت کنندگان به کشورهای انگلیسی زبان ، داوطلبان شرکت در آزمون دکترای داخل کشور و متخصصان رشته های مختلف که قصد دارند در دوره های تخصصی بین المللی در خارج از ایران شرکت کنند، می باشند.\r\n\r\nدوره های IELTS در موسسه شریعتی در چهار بخش Post- IELTS , Bridge, IELTS Skills, Pre-IELTS برگزار می گردد. دوره های  Pre-IELTS در 5 مقطع که شامل مقطع پایه (2 ترم)، مقطع مبتدی (4 ترم)، مقطع پیش میانی (4 ترم) و مقطع فوق میانی (4 ترم) و در مجموع 14 ترم 20 جلسه ای برگزار می شوند. دوره های IELTS Skills شامل 4 دوره 10 جلسه ای با تمرکز بر یک مهارت زبانی (Listening, Reading, Speaking and Writing) به صورت مستقل و آمادگی برای آزمون مربوطه هستند. دوره های Bridge و Post- IELTS در 4 ترم 20 جلسه ای با تمرکز بر مهارت های زبانی و با گرایش آزمون آیلتس برگزار می شوند.\r\n'),
(2, 'دوره های آموزشی ویژه بزرگسالان', 'دوره بزرگسالان مختص رده سنی 15 سال به بالا بوده و از دو بخش دوره های مبتدی و میانی(16 ترم) و دوره های تخصصی و پیشرفته(18 ترم) تشکیل شده است. در دوره های مبتدی و میانی سری کتاب های Touchstone و در دوره های تخصصی و پیشرفته سری کتاب های Viewpoint و CPE-Masterclass تدریس می شوند. علاوه بر این در تمامی مقاطع از کتاب های Oxford Word Skills در سطوح مختلف به عنوان کتاب جانبی، استفاده می شود.', 'دوره های مبتدی و میانی شامل چهار مقطع Upper-Intermediate، Intermediate ، Pre- Intermediate، Elementary بوده که هر یک در 4 ترم و 64 جلسه آموزشی تدریس می شوند.\r\nمقطع Elementary\r\n\r\nاهداف این مقطع عبارتند از آشنایی با مفاهیم ابتدایی و ساده زبان انگلیسی، توانایی برقراری ارتباط و تعامل در سطح نیازهای معمول و روزمره، توانایی درک و انتقال مفاهیم ذاتی (غیر انتزاعی) از طریق چهار مهارت شنیدار، گفتار، خواندن و نوشتار\r\n\r\nمقطع Pre-Intermediate\r\n\r\nدر این مقطع دانشجویان به تدریج به توانایی ارتباط با سطح بالاتری از روانی گفتار رسیده و زبان را در قالب کاربردی روزمره (دعوت کردن، پذیرفتن، رد کردن، اعتراض کردن، نصیحت کردن…) استفاده می نمایند.\r\n\r\n\r\n\r\nمقطع  Intermediate\r\n\r\nدر این مقطع زبان آموزان علاوه بر افزایش دایره واژگان و ساختار های دستوری، در کنار روان ترشدن، قادر به تولید جملات مرتبط و پیوسته بوده و می توانند به صورت معنی دار ارتباط برقرار نمایند. در ضمن زبان آموزان در این سطح قادرند تا در صورت بروز اشتباه، و اگر به طریقی به اشتباهشان اشاره گردد، سعی کنند تا اشتباه خود را تصحیح نمایند.\r\n\r\n \r\n\r\nمقطع Upper-Intermediate\r\n\r\nدر انتهای این مقطع زبان آموزان قادر خواهند بود تا مفاهیم پیچیده تر و انتزاعی تر را در زبان دوم، هم درک کرده و هم بیان نمایند، از ساختار های ترکیبی بیشتری استفاده نمایند، و بدون تذکر و کمک دیگران اشتباهات خود را متوجه شوند و تصحیح نمایند.\r\n\r\n \r\n'),
(3, 'دوره مترجمی کاربردی', 'دوره‌ی مترجمی کاربردی یکی از دوره‌های آموزشی موسسه‌ی شریعتی است که برای ترتبیت مترجمان متون ادبی و غیرادبی با محوریت آموزش کارگاهی ترجمه طراحی شده است. ترجمه و زبان‌آموزی بر یکدیگر تاثیر هم‌افزایی چشمگیری نیز دارند و در واقع ترجمه یکی از روش‌های موثر در زبان‌آموزی است، که بدین ترتیب، زبان آموزانی که قصد بهبود و پالایش مهارت‌های زبانی خود را دارند نیز می‌توانند از دوره‌ی مترجمی کاربردی موسسه‌ی سفیر بهره ببرند. دانشجویان ممتاز فارغ‌التحصیل از دوره‌های ترجمه می‌توانند پس از پایان دوره در «انتشارات سفیر فرهنگ وهنر» و نیز دیگر موسسات انتشاراتی که با دپارتمان ترجمه‌ی سفیر همکاری دارند به کار ترجمه مشغول شوند. دوره‌های مترجمی دوازده ترم در سه سطح مبتدی، میانی و پیشرفته را شامل می‌شوند. در دو سطح نخست کتاب‌هایی همچون سری کتاب‌هایDiscovering Fiction ، سری کتاب‌های CNN و چهارجلد گزیده‌ی نثر معاصر فارسی به همراه مواد آموزشی متنوع تصویری و شنیداری مورد استفاده قرار می‌گیرد و در چهار ترم آخر منابع متنوعی از ادبیات و مطبوعات ایران و جهان برای ترجمه به دانشجویان ارائه می‌شود که با توجه توانایی‌ها و مقتضیات هر کلاس توسط استاد مربوطه انتخاب می‌شود.', 'مقطع مبتدی\r\n\r\nدر چهار ترم اول دانشجویان درسِ خواندن و درک مفاهیم متون انگلیسی و فارسی را خواهند داشت که شامل متونِ عمدتاً مطبوعاتی و ادبی است. این مرحله با بحث آزاد و تحلیل ساختاری، واژگانی، سبکی و ادبی همراه است و دانشجویان به‌شکلی غیرمستقیم با مبانی و اصول اولیه‌ی ترجمه و مسائل ویرایشی آشنا می‌شوند. در این مقطع همچنین با استفاده از چهار جلد گزیده‌ی نثر معاصر فارسی دانشجویان با تاریخچه و مهم‌ترین آثار ادبیات معاصر ایران از عهد قاجار تا امروز آشنا می‌شوند و نیز شناختی کلی از ادبیات جهان به دست می‌آورند. در پایان این مقطع دانشجو شناختی از ادبیات ایران و جهان خواهد داشت و با مهم‌ترین اصول نگارش و ویرایش آشنا شده است و همچنین در سطح واژه و عبارت تمرینِ کارگاهی مستمری را در ترجمه پشت سر گذاشته است.\r\n\r\n\r\nمقطع میانی\r\n\r\nدر چهار ترم دوم دانشجویان در کار کارگاهیِ ترجمه از حد واژه و عبارت فراتر می‌روند و در سطح جمله به ترجمه می‌پردازند. در این مقطع دانشجویان همچنین با ادبیات کلاسیک فارسی که منبعی غنی برای تقویت دانش زبانی مترجم است آشنا می‌شوند و تکالیف درسی متفاوتی را بر عهده می‌گیرند که هدف از آن‌ها تقویت مهارت کتابخوانی به صورتی جدی در دانشجویان است. در پایان این دوره دانشجو علاوه بر تجربه‌ی ترجمه در سطح جمله، دانشی عمیق‌تر نسبت و اصول و روش‌های ترجمه و ادبیات ایران و جهان به دست می‌آورد.\r\n'),
(4, 'دوره آموزشی کودکان', '\r\n\r\nدوره کودکان مختص رده سنی 7 تا 12 بوده و از دو بخش دوره های مبتدی (20 ترم) و دوره های پیشرفته (15 ترم) تشکیل شده است. کتاب آموزشی مورد استفاده در این دوره ها، سری Super Minds از انتشارات کمبریج بوده که در 7 مقطع آموزشی برای زبان آموزان کودک طراحی شده است.  در کلیه ی مقاطع علاوه بر کتاب اصلی (Student’s Book)،  کتاب کار در منزل یا  Work Book  نیز در کلاس تمرین می شود. علاوه بر این، محصولات مجازی  و تمرین های آنلاین متنوع از قبیل Song و Video جهت کار در منزل منطبق با محتوای هر درس از کتاب های اصلی طراحی شده که پاسخگوی نیازهای یادگیری زبان این گروه سنی در عصر حاضر است.\r\n\r\nدر این دوره ها زبان آموزان کودک پس از آشنایی با کاربرد زبان در موقعیت های مختلف، مطالعه واژگان روزمره و کاربردی، دستور زبان روان و ساده در غالب متن های ملموس و داستان‌های موجود در کتاب، مهارت های فکری و خلاقیت خود را تقویت کرده و در کنار این مطالب موضوعات درسی مطرح در مدارس را نیز به زبان انگلیسی فرا می گیرند. این دوره ها در نهایت منجر به تقویت چهار مهارت زبانی کودکان می گردند.', 'دوره های مبتدی شامل چهار مقطع  Earth، Solar System ،  Galaxyو Universe بوده که هر یک در 5 ترم آموزشی تدریس می شوند. این دوره ها از سطح Starter برای زبان‌آموزانی که در مراحل اولیه یادگیری زبان انگلیسی همراه با مهارت های خواندن و نوشتن می باشند شروع می شود و تا کتاب Super Minds 3 در مقاطع بالاتر ادامه می یابد. در پایان این دوره، زبان آموزان به سطح A1 رسیده ومی توانند عبارات ابتدایی در شرایط خاص را درک کرده و با جملات ساده که گاها ناقص بوده و یا ایرادات گرامری دارند، در زبان دوم ارتباط برقرار نمایند.\r\nدوره های پیشرفته و تخصصی شامل سه مقطع Multiverse ، Heavens و Infinity بوده که هر یک در 5 ترم آموزشی تدریس می شوند. این دوره ها با کتاب Super Minds 4 آغاز و تا کتاب Super Minds 6 در مقاطع بالاتر ادامه می یابد. پس از پایان این دوره، زبان آموزان مفهوم کلی آنچه بیان می شود را درک می کنند، ولی در برخی از موارد با چالش هایی مواجه می شوند. آن ها قابلیت خواندن و نوشتن متون ساده را داشته و توانایی شرکت در مکالمه های مرتبط به موضوعاتی که برایشان آشنا بوده و یا به آن ها علاقمند هستند، را دارند.');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `ttavalod` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `melicode` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `ostan` varchar(18) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(18) COLLATE utf8_persian_ci NOT NULL,
  `celphone` varchar(12) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_persian_ci NOT NULL,
  `degree` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `year` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `courses` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `reg-code` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `family`, `ttavalod`, `sex`, `melicode`, `ostan`, `email`, `celphone`, `phone`, `degree`, `year`, `courses`, `reg-code`, `photo`) VALUES
(15, 'n', 'n', 'n', 'زن', 'n', 'تهران', 'n', 'n', 'n', 'n', 'n', 'Beginner', 'w308z', 'f8f15017be8c2500c0d8e0966a9e89cee.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shahriye`
--

CREATE TABLE `shahriye` (
  `id` int(11) NOT NULL,
  `course` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `stuid` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `mablagh` int(11) NOT NULL,
  `vaziyatpardakht` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `tarikhepardakht` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `shahriye`
--

INSERT INTO `shahriye` (`id`, `course`, `stuid`, `mablagh`, `vaziyatpardakht`, `tarikhepardakht`) VALUES
(1, 'beginner', '16', 3000000, 'Paid', '4/10/95'),
(5, 'beginner', '87', 3000000, 'UnPaid', '10/9/95'),
(3, 'pre-intermediate', '16', 4500000, 'UnPaid', '12/10/96'),
(6, 'elementary', '87', 4000000, 'Paid', '4/11/95'),
(7, 'intermediate', '16', 400000, 'UnPaid', '10/12/96'),
(8, 'beginner', '14', 3000000, 'Paid', '10/12/95'),
(9, 'beginner', '56', 4500000, 'paid', '10/12/95'),
(10, 'pre-intermediate', '56', 4000000, 'UnPaid', '10/12/96'),
(11, 'beginner', '7', 3000000, 'Paid', '8/10/95'),
(12, 'pre-intermediate', '7', 4000000, 'Paid', '10/8/96'),
(13, 'intermediate', '7', 450000, 'UnPaid', '20/12/96'),
(14, 'elementary', '7', 4000000, 'Paid', '10/12/96'),
(15, 'beginner', '98', 3000000, 'Paid', '10/12/95'),
(16, 'elementary', '98', 4000000, 'UnPaid', '10/12/96');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `tell` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `family`, `age`, `address`, `tell`, `username`, `password`) VALUES
(16, 'زهرا', 'رضایی', 19, 'کرج', '09159876514', 'zr18', '1515'),
(14, 'مهشید', 'مولوی', 14, 'تهران', '09357896454', 'ma12', '1212'),
(56, 'مهناز', 'رضایی', 21, 'تهران', '09357896452', '2020', 'm20'),
(25, 'مهران', 'اکبری', 18, 'کرج', '09159876514', 'me18', '1818'),
(98, 'رضا', 'علیزاده', 20, 'تهران-', '09159876514', 're15', '1515'),
(258, 'مهسا', 'حسینی', 28, 'تهران', '09128765142', '282828', 'ma28'),
(87, 'مهناز', 'قاسمی', 20, 'تهران- شریعتی', '09126547893', 'magh2020', '202020'),
(400, 'مرضیه', 'ارمغانی', 20, 'تهران', '09014567894', 'maaa', '2020mm'),
(7, 'مریم', 'امینی', 12, 'تهران', '09017894561', 'ma1212', '121212'),
(8, 'سهراب', 'علیخانی', 20, 'تهران', '09118796345', 'so20', '2020'),
(10, 'شاهین', 'علیمحمدی', 15, 'کرج', '09123654789', 'sh15', 's1515'),
(13, 'بهرام', 'اکبری', 30, 'تهران- تجریش', '0912156874', 'baa', '3030b'),
(19, 'سوگل ', 'طهماسبی', 19, 'تهران- میدان امام حسین', '09358713616', 'sota19', '191919'),
(21, 'علیرضا', 'عسگری', 17, 'تهران', '02156478931', 'aa1717', '1717');

-- --------------------------------------------------------

--
-- Table structure for table `stu_pic`
--

CREATE TABLE `stu_pic` (
  `id` int(11) NOT NULL,
  `pic_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `age` varchar(2) COLLATE utf8_persian_ci NOT NULL,
  `degree` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `tell` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `family`, `age`, `degree`, `tell`, `address`, `username`, `password`) VALUES
(4, 'فرهاد', 'عظیمی', '37', 'کارشناسی', '09125693745', 'تهران-', 'fa32', '3232'),
(88, 'رضا', 'علیپور', '52', 'کارشناسی', '09126547893', 'تهران', 're15', '515151'),
(87, 'رسول', 'احمدی', '30', 'کارشناسی', '09121558796', 'تهران', 'ra25', '2525'),
(54654, 'مهتاب', 'اکرمی', '30', 'کارشناسی ارشد زبان انگلیسی', '09121558796', 'تهران', 'mt3030', '303030'),
(70, 'فهیمه ', 'امیری', '35', 'دکتری زبان انگلیسی', '09121558565', 'تهران - زعفرانیه', 'fhaa', 'ffh3535'),
(75, 'مرضیه ', 'ابراهیمی', '40', 'کارشناسی ارشد ادبیات انگلیسی', '09123876545', 'تهران ', 'maeb', '404040');

-- --------------------------------------------------------

--
-- Table structure for table `tea_pic`
--

CREATE TABLE `tea_pic` (
  `id` int(11) NOT NULL,
  `pic_name` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `title`) VALUES
(1, 'le_witn_12nov13_16x9_lo.mp4', 'marathon swimming'),
(7, 'le_witn_24oct12_16x9_hi.mp4', 'hajj security'),
(8, 'learning_english_sweeping_16x9_hi.mp4', 'A clean sweap'),
(6, 'le_witn_16x9_hi.mp4', 'naked men exhibition'),
(9, 'le_witn_web_su_16x9_lo.mp4', 'subutteo revival ');

-- --------------------------------------------------------

--
-- Table structure for table `vocab`
--

CREATE TABLE `vocab` (
  `id` int(11) NOT NULL,
  `en` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `fa` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `vocab`
--

INSERT INTO `vocab` (`id`, `en`, `fa`, `type`) VALUES
(1, 'Abandon', 'ترک کردن ، رها کردن', '504'),
(3, 'Jealous', 'حسود', '504'),
(4, 'Tact', 'تدبیر', '504'),
(5, 'Oath', 'قسم ، سوگند خوردن', '504'),
(6, 'Vacant', 'خالی', '504'),
(7, 'Hardship', 'بی نوایی', '504'),
(8, 'Gallant', 'شجاع', '504'),
(9, 'Data', 'اطلاعات ، داده ها', '504'),
(10, 'Unaccustomed', 'غیرعادی', '504'),
(11, 'Bachelor', 'مرد مجرد', '504'),
(12, 'Corpse', 'جنازه ، جسد', '504'),
(13, 'Conceal', 'پنهان کردن ، پوشاندن', '504'),
(14, 'Dismal', 'غمگین', '504'),
(15, 'Frigid', 'خیلی سرد', '504'),
(16, 'Shriek', 'جیغ کشیدن', '504'),
(17, 'Sinister', 'شیطانی', '504'),
(18, 'Tempt', 'وسوسه', '504'),
(19, 'Wager', 'شرط بندی', '504'),
(20, 'Persuade', 'متقاعد کردن', '504'),
(21, 'to what end', 'به چه منظور', 'idiom'),
(22, 'You must hand it to him.', 'باید به کارش ایولله گفت.', 'idiom'),
(23, 'You make me ill with your speech.', 'با صحبتهایت حالم را بهم میزنی.', 'idiom'),
(24, 'I dare say…', 'به جرأت میتوانم بگویم…', 'idiom'),
(25, 'Mind your eye.', 'بپایید. ملتفت باشید.', 'idiom'),
(26, 'Excuse me back.', 'ببخشید پشتم به شماست.', 'idiom'),
(27, 'upon my word', 'به شرافتم سوگند', 'idiom'),
(28, 'on my own account', 'بهحساب خودم', 'idiom'),
(29, 'He takes after his father.', '(قیافهاش) به پدرش رفته.', 'idiom'),
(30, 'It is all the same to me.', 'به حال من فرقی نمیکند….', 'idiom'),
(31, 'It does not answer my purpose.', 'بدرد من نمی خورد.', 'idiom'),
(32, 'What is that to you?', 'بهتو چه؟', 'idiom'),
(33, 'Between you and me', 'بین خودمان باشد.', 'idiom'),
(34, 'It is not concern of mine.', 'بهمن مربوط نیست.', 'idiom'),
(35, 'Honesty is best policy.', 'آدم خوشمعامله شریک مال مردم است.', 'idiom'),
(36, 'I am greatly honored.', 'باعث افتخار من است.', 'idiom'),
(37, 'Pick on someone your own size.', 'برو با همقد خودت طرف بشو.', 'idiom'),
(38, 'Don’t twist the lion’s tail.', 'با دم شیر بازی نکن.', 'idiom'),
(40, 'A widow’s mite.', 'برگ سبزی است تحفهی درویش.', 'idiom'),
(41, 'Let me gather my breath.', 'بگذارید نفسم جا بیاید.', 'idiom'),
(42, 'Denmark', 'دانمارک', 'country'),
(43, 'England', 'انگلستان', 'country'),
(44, 'Sweden', 'سوئد', 'country'),
(45, 'United Kingdom', 'پادشاهی متحد بریتانیا', 'country'),
(46, 'France', 'فرانسه', 'country'),
(47, 'Netherlands', 'هلند', 'country'),
(48, 'Croatia', 'کرواسی', 'country'),
(49, 'Cyprus', 'قبرس', 'country'),
(50, 'Greece', 'یونان', 'country'),
(51, 'Italy', 'ایتالیا', 'country'),
(52, 'Slovenia', 'اسلوونی', 'country'),
(53, 'Hungary', 'مجارستان', 'country'),
(54, 'Poland', 'لهستان', 'country'),
(55, 'Russia', 'روسیه', 'country'),
(56, 'Ukraine', 'اوکراین', 'country'),
(57, 'Mexico', 'مکزیک', 'country');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nashriyat`
--
ALTER TABLE `nashriyat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price-course`
--
ALTER TABLE `price-course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shahriye`
--
ALTER TABLE `shahriye`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_pic`
--
ALTER TABLE `stu_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tea_pic`
--
ALTER TABLE `tea_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vocab`
--
ALTER TABLE `vocab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `nashriyat`
--
ALTER TABLE `nashriyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `price-course`
--
ALTER TABLE `price-course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `shahriye`
--
ALTER TABLE `shahriye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `vocab`
--
ALTER TABLE `vocab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
