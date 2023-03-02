<!DOCTYPE html>
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
    
    $pageRow_records = 100;
	//預設頁數
	$num_pages = 1;
	//若已經有翻頁，將頁數更新
	if (isset($_GET['page'])) {
	  $num_pages = $_GET['page'];
	}
	//本頁開始記錄筆數 = (頁數-1)*每頁記錄筆數
    $startRow_records = ($num_pages -1) * $pageRow_records;
    
    if(! isset($_SESSION['email'])) {
        header('Location: index.php');
    }
    $email = $_SESSION['email'];
    $sql_query = "SELECT * FROM `transaction` WHERE email LIKE '" . mysqli_real_escape_string ( $db_link, $email ) . "'";
    $sql_query_limit = $sql_query." LIMIT ".$startRow_records.", ".$pageRow_records;
	//以加上限制顯示筆數的SQL敘述句查詢資料到 $result 中
	$result = mysqli_query($db_link, $sql_query_limit);

?>

<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>in租借紀錄</title>
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

            <style type="text/css">
                .tr1 {
                    background: #FFAC55;
                    color: #FAFAFA;
                    border: 1px solid #FFAC55;
                    font-size: 18px;
                }
                table {
                    border: 3px solid #FFAC55;
                    border-collapse: collapse;
                    margin-left: auto;
                    margin-right: auto;
                    width: 100%;
                }
                td{
                    padding-right: 10px;
                    padding-left: 10px;
                    padding-top: 5px;
                    padding-bottom: 5px;
                }
            </style>
    </head>

        <body style="text-align: center;">
            <main>
            <table border="1" RULES=ROWS >
                                    <tr class="tr1">
                                        <td align="center">開始日期</td>
                                        <td align="center">結束日期</td>
                                        <td align="center">費用</td>
                                        <td align="center">租借商品</td>
                                        <td align="center">租借方案</td>
                                    </tr>
                                    <?php
                                    while($row_result = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                            echo "<td>".$row_result["startDate"]."</td>";
                                            echo "<td>".$row_result["endDate"]."</td>";
                                            echo "<td>".$row_result["tEth"]."</td>";
                                            echo "<td>".$row_result["pName"]."</td>";
                                            echo "<td>".$row_result["pType"]."</td>";
                                        echo "</tr>";
                                    }
                                    ?>　　　
                                </table>  
        <!-- ================ contact section end ================= -->
    </main>
    <!-- Scroll Up -->

    <!-- JS here -->
	
    </body>
</html>
