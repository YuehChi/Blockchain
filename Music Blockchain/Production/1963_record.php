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
    
    $sql_query = "SELECT * FROM `transaction` WHERE pName LIKE 'piano'";
    $sql_query_limit = $sql_query." LIMIT ".$startRow_records.", ".$pageRow_records;
	//以加上限制顯示筆數的SQL敘述句查詢資料到 $result 中
	$result = mysqli_query($db_link, $sql_query_limit);

?>

<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>租借紀錄</title>
    <style>
    	table{
    		margin-right: auto;
    		margin-left: auto;
    		width: 100%;
    	}
		th{
			border-bottom: 1.5px solid white;
			background-color: #9D9D9D;
			color: white;
			font-size: 30px;
			padding-right: 50px;
			padding-left: 50px;
			padding-top: 10px;
			padding-bottom: 10px;
			
		}
		td{
			background-color: #D0D0D0;
			text-align: center;
			font-size: 20px;
			padding-bottom: 10px;
			padding-top: 10px;
		}

        @media (max-width: 575px) {
            th{
                font-size: 25px;
                padding-right: 25px;
                padding-left: 25px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }
	</style>
</head>

<body>
    <table>
    	<tr>
    		<th>租借人</th>
    		<th>開始日期</th>
    		<th>歸還日期</th>
    	</tr>
        <?php
        while($row_result = mysqli_fetch_assoc($result)){
            echo "<tr>";
                echo "<td>".$row_result["email"]."</td>";
                echo "<td>".$row_result["startDate"]."</td>";
                echo "<td>".$row_result["endDate"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>