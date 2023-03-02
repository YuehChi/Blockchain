<?PHP
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST["submit"])||empty($_POST['E-mail']) || empty($_POST['Password'])){
	exit("錯誤執行");
}//檢測是否有submit操作 
include('connect.php');//連結資料庫
$email = $_POST['E-mail'];
$passowrd = $_POST['Password'];

if ($email && $passowrd){//如果使用者名稱和密碼都不為空
	$sql = "select * from user where email = '$email' and password='$passowrd'";//檢測資料庫是否有對應的username和password的sql
	$result = mysqli_query($con,$sql);//執行sql
	$rows=mysqli_num_rows($result);//返回一個數值

	
	if($rows){//0 false 1 true
		session_start();
		$_SESSION['email'] = $email;
		echo"
		<script>
		alert('成功登入，為您跳轉至首頁')
		</script>";
		header("refresh:0;url=index.html");//如果成功跳轉至首頁		
		exit;
	}
	else{
		echo "
		<script>
		alert('帳號或密碼錯誤，請重新輸入')
		</script>";
		echo"<script>
		setTimeout(function(){window.location.href='login.html';},1000);
		</script>";//如果錯誤使用js 1秒後跳轉到登入頁面重試;
	}
}
else{//如果使用者名稱或密碼有空
	echo "表單填寫不完整";
	echo "
	<script>
	setTimeout(function(){window.location.href='login.html';},1000);
	</script>";//如果錯誤使用js 1秒後跳轉到登入頁面重試;
}
mysqli_close();//關閉資料庫
?>

