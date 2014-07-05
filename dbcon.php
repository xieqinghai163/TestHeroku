<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{	
	die("Could not connect: " . mysql_error());
}

mysql_select_db("chinesefoodcenter", $con);
mysql_query("SET NAMES UTF8");
?>