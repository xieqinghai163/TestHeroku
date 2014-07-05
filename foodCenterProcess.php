<?php 
include './dbcon.php';

$action="list";
if (isset($_POST["actionMethod"]))
	$action=$_POST["actionMethod"];
if ($action=="update")
{
	$catagoryList=getCatagoryList($con);
	$editInfo=getFoodCenterInfo($con);
	$arr = array("catagoryList" => $catagoryList,"editInfo"=>$editInfo);
}else if ($action=="view")
{
	$editInfo=getFoodCenterInfoView($con);
	$arr = array("editInfo"=>$editInfo);
} else if ($action=="updateConfirm")
{
	$message=updateFoodCenter($con);
	$arr = array("message"=>$message);
} else if ($action=="delete")
{
	$message=deleteFoodCenter($con);
	$arr = array("message"=>$message);
} else if ($action=="add")
{
	$catagoryList=getCatagoryList($con);
	$arr = array("catagoryList" => $catagoryList);
}else if ($action=="addConfirm")
{
	$message=insertFoodCenter($con);
	$arr = array("message" => $message);
}else // action list
{		
	$strFoodCenterList=getFoodCenterList($con);
	$catagoryList=getCatagoryList($con);
	$arr = array("strFoodCenterList" => $strFoodCenterList,"catagoryList"=>$catagoryList);
}
echo json_encode($arr);
mysql_close($con);

function getFoodCenterList($con){
	$sql = "SELECT `FC_ID`, f.`NAME`, `Address`, `Contact`, `Desc`, `Rating`, c.`NAME` FROM  `food_center` f,`category` c where f.c_id=c.c_id ";
	if (isset($_POST["serchName"]) && $_POST["serchName"] <>"")
		$sql = $sql . " and f.`NAME`  like '%".$_POST["serchName"]."%' ";
	if (isset($_POST["searchCatagory"]) && $_POST["searchCatagory"] >0)
		$sql = $sql . " and f.c_id=".$_POST["searchCatagory"];
		
	$result = mysql_query($sql);

	$strFoodCenterList = " ";

	while($rows = mysql_fetch_array($result)){
		 $FC_ID=$rows[0];
		 $strFoodCenterList = $strFoodCenterList."<tr><td><input type='checkbox' name='delcheckbox[]' value='".$FC_ID."' /></td>"
			 ."<td><a href='foodCenterAdd.php?FC_ID=".$FC_ID."&actionMethod=update'>".$FC_ID."</a></td><td>"
			 . $rows[1] . "</td><td>"
			 . $rows[2] . "</td><td>"
			 . $rows[3] . "</td><td>"
			 . $rows[4] . "</td><td>"
			 . $rows[5] . "</td><td>"
			 . $rows[6] . "</td><td>"
			 . "<a href='foodCenterView.php?FC_ID=".$FC_ID."&actionMethod=view'>view</a></td></tr>";	 		
	}
	return $strFoodCenterList;
}
function getCatagoryList($con){
	$catagroySql=" SELECT `C_ID`, `NAME` FROM `category` ";
	$catagoryResult = mysql_query($catagroySql);
	$catagoryList="";
	while ($catagory= mysql_fetch_array($catagoryResult)){
		$catagoryList=$catagoryList. "<option value='".$catagory[0]."'>".$catagory[1]."</option>";
	}
	return $catagoryList;
}
function getFoodCenterInfo($con){
	$editSql=" select `NAME`, `Address`, `Contact`, `Desc`, `Rating`,c_id FROM  `food_center`   ";
	if (isset($_POST["FC_ID"]) && $_POST["FC_ID"]<>"")
		$editSql = $editSql. " where `FC_ID`=".$_POST["FC_ID"];		
	$editInfo = "";
	$editResult = mysql_query($editSql);
	if($rows = mysql_fetch_array($editResult)){
		 $editInfo=$rows ;
	}
	return $editInfo;
	//return $editSql;
}
function getFoodCenterInfoView($con){
	$editSql=" select f.`NAME`, `Address`, `Contact`, `Desc`, `Rating`, c.`NAME` FROM  `food_center` f,`category` c where f.c_id=c.c_id  ";
	if (isset($_POST["FC_ID"]) && $_POST["FC_ID"]<>"")
		$editSql = $editSql. " and `FC_ID`=".$_POST["FC_ID"];		
	$editInfo = "";
	$editResult = mysql_query($editSql);
	if($rows = mysql_fetch_array($editResult)){
		 $editInfo=$rows ;
	}
	return $editInfo;
	//return $editSql;
}

function insertFoodCenter($con){
	$sql = "INSERT INTO `food_center`(`NAME`, `Address`, `Contact`, `Desc`, `Rating`, `C_ID`) VALUES ".
	"('".$_POST["NAME"]."','".$_POST["Address"]."','".$_POST["Contact"]."','".$_POST["Desc"]."','".$_POST["Rating"]."',".$_POST["C_ID"].")";
	$message="added failure.";
	$addNum=mysql_query($sql, $con);
	if ($addNum>0)
		$message="added success.";
	return $message;
}
function updateFoodCenter($con){
	$sql = "UPDATE `food_center` SET `NAME`='".$_POST["NAME"]."',`Address`='".$_POST["Address"]
	."',`Contact`='".$_POST["Contact"]."',`Desc`='".$_POST["Desc"]."',`Rating`='".$_POST["Rating"]
	."',`C_ID`=".$_POST["C_ID"]." WHERE `FC_ID`=".$_POST["FC_ID"]." ";
	$message="updated failure.";
	$addNum=mysql_query($sql, $con);
	if ($addNum>0)
		$message="updated success.";
	return $message;
}
function deleteFoodCenter($con){
	$delSql = "delete from `food_center` ";
	$delist=implode(',', $_POST["delcheckbox"]);
	$delSql = $delSql . " where fc_id in (".$delist.") ";
	$delnum = mysql_query($delSql, $con);	

	$message="delete failure";
	if ($delnum>0)
		$message="delete success";
	return $message;
	//return $delSql;
}
?>