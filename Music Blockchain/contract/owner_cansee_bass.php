<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>owner_cansee_Bass</title>
    <script src="js/web3.min.js"></script>
</head>


<body>
    


   
</body>

</html>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contract</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
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
                                            <li><a href="../index.html">??????</a></li>
                                            <li><a href="../about.html">????????????</a></li>
                                            <li><a href="../services.html">????????????</a></li>
                                            <li><a href="../Instrument/blog.html">????????????</a>
                                                <ul class="submenu">
                                                    <li><a href="../Instrument/blog.html">????????????</a></li>
                                                    <li><a href="../Instrument/electric-guitar.html">??????</a></li>
                                                    <li><a href="../Instrument/bass.html">??????</a></li>
                                                    <li><a href="../Instrument/piano.html">??????</a></li>
                                                    <li><a href="../Instrument/violin.html">??????</a></li>
                                                
                                                </ul>
                                            </li>
                                            <li><a href="../MyPage/my_page.html">????????????</a></li>
                                            <li><a href="../contact_us.html">????????????</a></li>
                                            <li><a href="../logout.php">??????</a></li>
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
                                <h2>??????????????????</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="subscribe-section">
            <div class="about-details section-padding5">
                <div class="container">
                    <div class="row">
                        <div class="about-details-cap mb-50">
                            <div class="select" style= "text-align: left;">
                                <h3 style= "display:block">??????????????????????????????<em id="R_time"></em></h3>
                                <h3 style= "display:block">????????????????????????<em id="closerent"></em></h3>
                                <h3 style= "display:block">???????????????<em id="TotalAmount"></em></h3>
                                <h3 style= "display:block">???????????????<em id="R_Fun"></em></h3>
  
                                <input type="button" id="restart" value="????????????">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->

        <?php
		require 'contract_address_bass.php';
	?>
    <script>

        var money = 0 ;
        
        //???????????????????????????
        async function init() {
            Contract = await new web3.eth.Contract(abi, address);
            Contract.methods.R_time().call().then(function (num) {
                document.getElementById('R_time').textContent = num+ " ???";;
            });
            Contract.methods.TotalAmount().call().then(function (total) {
                document.getElementById('TotalAmount').textContent = total+ " value";;
                money = total;
            });

        }
        init();

        async function init2() {
            Contract = await new web3.eth.Contract(abi, address);
            Contract.methods.R_Fun().call().then(function (result) {
                if (result == 1) {
					document.getElementById('R_Fun').textContent = "????????????";
				}
				else if (result == 2){
					document.getElementById('R_Fun').textContent = "????????????";
				}
                else if (result == 3){
					document.getElementById('R_Fun').textContent = "????????????";
				}
				else {
					document.getElementById('R_Fun').textContent = "??????????????????";
				}
        });
            Contract.methods.closerent().call().then(function (result2) {
                    
                    if (result2 == 1) {
                        document.getElementById('closerent').textContent = "????????????????????????????????????";
                    }
                    else if (result2 == 0){
                        document.getElementById('closerent').textContent = "????????????";
                    }
                    else {
                        document.getElementById('closerent').textContent = "??????????????????";
                    }
            });	

        }
        init2();

        // ??????Metamask???????????????????????????
        window.addEventListener('load', async () => {
            // Modern dapp browsers...
            if (window.ethereum) {
                window.web3 = new Web3(ethereum);
                try {
                    // Request account access if needed
                    await ethereum.enable();
                    // Acccounts now exposed
                    web3.eth.sendTransaction({/* ... */ });
                } catch (error) {
                    // User denied account access...
                }
            }
            // Legacy dapp browsers...
            else if (window.web3) {
                window.web3 = new Web3(web3.currentProvider);
                // Acccounts always exposed
                web3.eth.sendTransaction({/* ... */ });
            }
            // Non-dapp browsers...
            else {
                console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
            }
        });



        // ????????????
        async function restart() {
            var accounts = await web3.eth.getAccounts();

            Contract.methods.RestartRentInstrument()
                .send({ from: accounts[0] })
                .then(function (data) {
                    console.log(data);
                })

        }
        document.getElementById('restart').addEventListener('click', restart);


    </script>

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
                                        <p class="info1">????????????????????????????????????110????????????????????????????????????????????????????????????????????????????????????</p>
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
                                        <li><a href="#" >????????????</a></li>
                                        <li><a href="#" >????????????</a></li>
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
                                                <p >??????????????????</p>
                                                <p >???????????????????????????70???</p>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>??????????????????????????????<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">??????110</a>
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
        
        <!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>
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