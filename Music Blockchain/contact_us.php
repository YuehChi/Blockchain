<?php 
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
	exit("Error");
}//判斷是否有submit操作

$email=$_POST['email'];
$name=$_POST['name'];
$subject=$_POST['subject'];
$message=$_POST['message'];

include('connect.php');//連結資料庫
$q="insert into contact(email,name,subject,message) values ('$email','$name','$subject','$message')";//向資料庫插入表單傳來的值的sql
$reslut=mysqli_query($con,$q);//執行sql
if (!$reslut){
die('Error: '.mysqli_error($con));//如果sql執行失敗輸出錯誤
}else{
echo"
<script>
alert('成功發送訊息，為您跳轉至首頁')
</script>";
header("refresh:0;url=index.html");//如果成功跳轉至首頁
}
mysqli_close($con);//關閉資料庫
?>