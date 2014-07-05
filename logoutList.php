<?php
session_start();
$msg = "";
if(isset($_SESSION["user_id"])){
	unset($_SESSION["user_id"]);
}
$msg = "logout";
echo $msg;
?>