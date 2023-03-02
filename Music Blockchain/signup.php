<?php 
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
	exit("Error");
}//判斷是否有submit操作

$email=$_POST['E-mail'];
$password=$_POST['Password'];
$rpassword=$_POST['RPassword'];
$name=$_POST['name'];
$snumber=$_POST['snumber'];
$cellphone=$_POST['cellphone'];
$iwallet=$_POST['wallet'];
$birthday=$_POST['bd'];

include('connect.php');//連結資料庫
$q="insert into user(email,username,password,snumber,cellphone,iwallet,bd) values ('$email','$name','$password','$snumber','$cellphone','$iwallet','$birthday')";//向資料庫插入表單傳來的值的sql
$reslut=mysqli_query($con,$q);//執行sql
if (!$reslut){
die('Error: '.mysqli_error($con));//如果sql執行失敗輸出錯誤
}
mysqli_close($con);//關閉資料庫
?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>使用者註冊</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="body-bg">
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                    <p>Loading...</p>
                </div>
            </div>
        </div>
    </div>
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><i class="far fa-clock"></i> Mon - SAT: 6.00 am - 10.00 pm</li>
                                        <li>Sun:  Closed</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2.png" alt="" style="width: 150%;height: 150%;"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
									<nav> 
                                            <ul id="navigation">                                                                                          
                                            <li><a href="index.html">首頁</a></li>
                                            <li><a href="about.html">關於我們</a></li>
                                            <li><a href="services.html">最新消息</a></li>
                                            <li><a href="blog.html">樂器分類</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">所有樂器</a></li>
                                                    <li><a href="electric-guitar.html">吉他</a></li>
                                                    <li><a href="bass.html">貝斯</a></li>
                                                    <li><a href="piano.html">鋼琴</a></li>
                                                    <li><a href="violin.html">提琴</a></li>
                                                    <li><a href="drum.html">鼓</a></li>
                                                    <li><a href="drum.html">管樂</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact us.html">聯絡我們</a></li>
                                        </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Sign Up</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <div class="signup-details section-padding30">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-lg-8">
                        <div class="signup">
							<div class="signuparea">
								<h1>感謝您註冊我們的系統</h1>
								<h3 style="text-align: center;">以下是您的帳號密碼還請牢記</h3>
                                <div class="design">
                                    <ol>
                                    <li>會員帳號/密碼</li>
                                    <br>
                                    <p style="text-align: left;margin-left: 200px">帳號:
										<?php
											echo $email.'<br/>';
										?>
									</p>
									<p style="text-align: left;margin-left: 200px">密碼:
										<?php
											echo $password.'<br/>';
										?>
                                    </p>

                                    <br>
                                    </ol>
                                </div>
                                <input class="submit" type="submit" name="submit" id="button" value="點我跳轉回登入頁面" onclick="javascript:location.href='./login.html'"style="margin-left: 330px;">
                            </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg">
           <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-8">
                            <div class="single-footer-caption  mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2.png" style="width: 100%;height: 100%;"></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">這是由國立中山大學資管系110級學生，林耕霈教授指導的團隊製作而成的區塊鏈租借樂器平台</p>
                                    </div>
                                </div>

                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1" style="font-size: 20px;color: #D1603D;">Subscribe now to get daily updates</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    SIGN UP
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Recent Posts</h4>
                                    <ul>
                                        <li><a href="#" >About Us</a></li>
                                        <li><a href="#" >客服中心</a></li>
                                        <li><a href="#" >會員合約</a></li>
                                        <li><a href="#" >FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 >Get In Touch</h4>
                                    <div class="footer-pera">
                                        <div class="media contact-info">
                                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                                            <div class="media-body">
                                                <p >國立中山大學</p>
                                                <p >高雄市鼓山區蓮海路70號</p>
                                            </div>
                                        </div>
                                        <div class="media contact-info">
                                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                            <div class="media-body">
                                                <p >07-1234567</p>
                                                <p >Mon to Fri 9am to 6pm</p>
                                            </div>
                                        </div>
                                        <div class="media contact-info">
                                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                                            <div class="media-body">
                                                <p >watchingyoumis110@gmail.com</p>
                                                <p >Send us your query anytime!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>資管專案樂器租借系統<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">資管110</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"><img src="assets/img/blog/top.ico" alt="post"></a>
</div>

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>

        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="./assets/js/jquery.counterup.min.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>

