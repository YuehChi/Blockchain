<!doctype html>
<?PHP
if(!isset($_POST['submit'])){
	exit("Error");
}//判斷是否有submit操作

$email=$_POST['email'];
$username=$_POST['username'];
$snumber=$_POST['snumber'];
$cellphone=$_POST['cellphone'];
$bd=$_POST['bd'];

include('../connect.php');//連結資料庫
$q="Update user Set email='$email', username='$username', snumber='$snumber', cellphone='$cellphone', bd='$bd' WHERE email = '$email'";
$r=mysqli_query($con,$q);//執行sql
if (!$r){
die('Error: '.mysqli_error($con));//如果sql執行失敗輸出錯誤
}
mysqli_close($con);//關閉資料庫
?>

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ot編輯基本資料</title>
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
<style>
    tr{
        padding: 50px;
    }
    td{
        padding: 20px;
    }
    .button{
        border:0;
        background-color:#FFAC55;
        color:#fff;
        border-radius:10px;
    }
    .button:hover{
        color:#FFAC55;
        background-color:#fff;
        border:2px #FFAC55 solid;
    }
</style>
</head>

<body>
    <!-- Preloader Start -->
    <!-- Preloader Start -->
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
        <table align="center" border="1" RULES=ROWS style="width: 70%;">
                                    <tr>
                                        <td align="center">帳號</td>
                                        <?php
                                        echo "<td align='center'>".$email."</td>";
                                        ?>
                                    </tr>
                                    <tr>
                                        <td align="center">姓名</td>
                                        <?php
                                        echo "<td align='center'>".$username."</td>";
                                        ?>
                                    </tr>
                                    <tr>
                                        <td align="center">身分證字號</td>
                                        <?php
                                        echo "<td align='center'>".$snumber."</td>";
                                        ?>
                                    </tr>
                                    <tr>
                                        <td align="center">電話</td>
                                        <?php
                                        echo "<td align='center'>".$cellphone."</td>";
                                        ?>
                                    </tr>
                                    <tr>
                                        <td align="center">生日</td>
                                        <?php
                                        echo "<td align='center'>".$bd."</td>";
                                        ?>
                                    </tr>　　　　　　　　　　　　　　　　　　　　　
                                </table>
                                <br><br>
            <div class="button-group-area mt-1" align="center">
                <input class="button" type="submit" name="submit" id="button" value="確認修改" onclick="javascript:location.href='./in_information.php'" style="padding: 30px; padding-top: 10px; padding-bottom: 10px;">
            </div>
        <!-- ================ contact section end ================= -->
    </main>
    <!-- Scroll Up -->

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