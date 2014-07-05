<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en-CA" xml:lang="en-CA">
<head>
<meta charset="utf-8"/>
<style type = "text/css"></style>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/foodCenter.js"></script>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<title>My Social Network</title></head>
<body>
<div id="allcontent">
    <div id="header">
        <?php
            include "./layout/header.php";
        ?>
    </div>
    <div id="menu">
        <?php
            include "menu.php";
        ?>
    </div>
    <div id="main">
        <article>
        <h1>Food Center</h1>
		<div id="mytestdiv"></div>
        <hr />
        <form  id="foodCenterForm" name="foodCenterForm">  
		<table id="seachTb">
		<tr>
		<td><label>FoodCenter Name:</label></td>
		<td><input type="text" name="serchName" id="serchName" value="" /></td>
		<td></td>
		</tr>
		<tr>
		<td><label>Catagory:</label></td>
		<td>
			<select name="searchCatagory" id="searchCatagory">
                <option value="0">Select</option>				
            </select></td>
		<td><input type="button" id="serchButton" value="Search" /></td>
		</tr>
		</table>
        <table id="foodCenterListTbl" name="foodCenterListTbl">
          <tr>
            <th scope="col">Del</th>
            <th scope="col">FC_ID</th>
            <th scope="col">NAME</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">Desc</th>
            <th scope="col">Rating</th>
            <th scope="col">Category</th>
            <th scope="col">View</th>
          </tr>             
          </table>
		  <table>
		  <tr>
		  <td>
		  <!--input type="button" value="Add Food Center" onClick="addFoodCenter()" /-->
		  <button id="addFoodCenter" type="button">Add Food Center</button>
		  <button id="delFoodCenter" type="button" >Delete</button>
		  <input type="hidden" name="actionMethod" id="actionMethod" value="list" />
		  </td>
		  </tr>
		  </table>
            </form>              
    </article>
    </div>
    <div id="footer">
        <?php
            include "./layout/footer.php";
        ?>
    </div>
</div>
</body>
</html>