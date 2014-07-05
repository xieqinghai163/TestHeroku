<?php
include './dbcon.php';
session_start();
$msg ="";
$login_user_id = $_POST['login_user_id'];
$login_pass = $_POST['login_pass'];

if($login_user_id == "admin" && $login_pass == "admin"){
	$_SESSION['user_id'] = "admin";
	$msg = "1";
}else{
	$sql = "select role from user where account='".$login_user_id."' and  password='".$login_pass."' ";
	$result = mysql_query($sql);
	
	if($row = mysql_fetch_array($result)){
		$_SESSION['user_id'] = $row['role'];
		$msg = "1";
	}else{
		$msg = "0";
	}
}
echo $msg;
?>