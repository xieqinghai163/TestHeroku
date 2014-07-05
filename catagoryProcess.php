<?php 
include './dbcon.php';
$action="list";
if (isset($_POST["actionMethod"]))
	$action=$_POST["actionMethod"];
if ($action=="update")
{
	$catagoryInfo=getCatagoryInfo($con);	
	$arr = array("catagoryInfo"=>$catagoryInfo);
} else if ($action=="updateConfirm")
{
	$message=updateCatagory($con);	
	$arr = array("message"=>$message);
} else if ($action=="delete")
{
	$message=deleteCatagory($con);	
	$arr = array("message"=>$message);
} else if ($action=="addConfirm")
{
	$message=insertCatagory($con);	
	$arr = array("message"=>$message);
}else // action list
{		
	$catagoryList=getCatagoryList($con);
	$arr = array("catagoryList"=>$catagoryList);
}
echo json_encode($arr);
mysql_close($con);


function getCatagoryList($con){
	$sql = "SELECT `C_ID`, `NAME` FROM `category` ";		
	$result = mysql_query($sql);

	$strCatagoryList = " ";

	while($rows = mysql_fetch_array($result)){
		 $C_ID=$rows[0];
		 $strCatagoryList = $strCatagoryList."<tr><td><input type='checkbox' name='delcheckbox[]' value='".$C_ID."' /></td>"
			 ."<td><a href='catagoryAdd.php?C_ID=".$C_ID."&actionMethod=update'>".$C_ID."</a></td><td>"
			 . $rows[1] . "</td></tr>";	 		
	}
	return $strCatagoryList;
}
function getCatagoryInfo($con){
	$sql = "SELECT `C_ID`, `NAME` FROM `category` where `C_ID`=".$_POST["C_ID"];		
	$result = mysql_query($sql);

	$catagoryInfo = " ";

	if($rows = mysql_fetch_array($result)){
		 $catagoryInfo=$rows;
	}
	return $catagoryInfo;
}
function insertCatagory($con){	
	$sql = "INSERT INTO `category` ( `NAME`) VALUES ('".$_POST["NAME"]."') ";
	$addNum = mysql_query($sql, $con);
	$message="added failure!";
	if($addNum>0)
		$message="added success!";
	return $message;
	//return $sql;
}
function deleteCatagory($con){	
	$delist=implode(',', $_POST["delcheckbox"]);
	$sql = "DELETE FROM `category` WHERE `C_ID` in (".$delist.")";
	$addNum = mysql_query($sql, $con);
	$message="deleted failure!";
	if($addNum>0)
		$message="deleted success!";
	return $message;
	//return $sql;
}
function updateCatagory($con){
	$sql = "UPDATE `category` SET `NAME`='".$_POST["NAME"]."' WHERE `C_ID`='".$_POST["C_ID"]."'";
	$addNum = mysql_query($sql, $con);
	$message="updated failure!";
	if($addNum>0)
		$message="updated success!";
	return $message;
	//return $sql;
}
?>