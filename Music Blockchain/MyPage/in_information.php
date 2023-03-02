
<!doctype html>
<?php
    session_start();
	//資料庫主機設定
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	//連線伺服器
	$db_link = @mysqli_connect($db_host, $db_username, $db_password);
	if (!$db_link) die("資料連結失敗！");
	//設定字元集與連線校對
    mysqli_set_charset($db_link, 'utf8');
    $seldb = @mysqli_select_db($db_link, "ycrent");
    if (!$seldb) die("資料庫選擇失敗！");

    if(! isset($_SESSION['email'])) {
        header('Location: index.php');
    }
    $email = $_SESSION['email'];
    $sql_query = "SELECT * FROM user WHERE email LIKE '" . mysqli_real_escape_string ( $db_link, $email ) . "'";
    $result = mysqli_query($db_link, $sql_query);
    $row_result = mysqli_fetch_assoc($result);
?>

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>in基本資料</title>
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
    input{
        border:0;
        background-color:#FFAC55;
        color:#fff;
        border-radius:10px;
        padding: 30px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-weight: bold;
        font-size: 20px;
        }
    input:hover{
        color:#FFAC55;
        background-color:#fff;
        border:2px #FFAC55 solid;
    }
    
    tr {
        border: 1px solid #FFAC55;
        background-color: #FAFAFA;
    }
    table{
        width: 70%;
        border: 1px solid ;
    }
    td{
        padding-right: 10px;
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 20px;
        border-right: 1px solid orange;
    }
</style>

</head>

<body>
    <!-- Preloader Start -->
    <!-- Preloader Start -->
  
        <!-- Header Start -->
        
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
        <table align="center" frame="void" border="1" RULES=ROWS>
                                    <tr>
                                        <td align="center">帳號</td>
                                        <?php
                                        echo "<td align='center'>".$row_result['email']."</td>";
                                        ?>
                                    <tr>
                                        <td align="center">姓名</td>
                                        <?php
                                        echo "<td align='center'>".$row_result["username"]."</td>";
                                        ?>
                                    </tr>
                                    <tr>
                                        <td align="center">身分證字號</td>
                                        <?php
                                        echo "<td align='center'>".$row_result["snumber"]."</td>";
                                        ?>
                                    </tr>
                                    <tr>
                                        <td align="center">電話</td>
                                        <?php
                                        echo "<td align='center'>".$row_result["cellphone"]."</td>";
                                        ?>
                                    </tr>
                                    <tr>
                                        <td align="center">生日</td>
                                        <?php
                                        echo "<td align='center'>".$row_result["bd"]."</td>";
                                        ?>
                                    </tr>　　　　　　　　　　　　　　　　　　　　　
                                </table>
                                <br><br>
                                <div class="button-group-area mt-1" align="center">
                <a href="in_information.html"><a href="in_edit.php" >
                <input  type="button" name="確認" value="編輯">
            </a></a>
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