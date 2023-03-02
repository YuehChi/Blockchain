<?php
$server="localhost";
$db_username="";//資料庫使用者名稱
$db_password="";//資料庫密碼
$connect = mysql_connect($server,$db_username,$db_password);

if(!$connnect){
	die("Unable to connect to database.".mysql_error());//如果連結失敗輸出錯誤
}
mysql_select_db('',$con);//選擇存取的資料庫
?>