<?php
session_start();
header("Content-Type:text/html; charset=utf-8");
//清除Session
session_destroy();
//導到login.php
header("Location:login.html");
?>