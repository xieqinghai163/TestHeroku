<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en-CA" xml:lang="en-CA">
<head>
<meta charset="utf-8"/>
<style type = "text/css"></style>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/catagory.js"></script>
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
        <h1>Catagory</h1>
		<div id="mytestdiv"></div>
        <hr />
        <form  id="catagoryForm" name="catagoryForm"> 		
        <table id="catagoryListTbl" name="catagoryListTbl">
          <tr>
            <th scope="col">Del</th>
            <th scope="col">C_ID</th>
            <th scope="col">NAME</th>
          </tr>             
          </table>
		  <table>
		  <tr>
		  <td>
		  <button id="addFoodCenter" type="button">Add Catagory</button>
		  <button id="delFoodCenter" type="button" >Delete</button>
		  <input type="hidden" name="actionMethod" id="actionMethod" value="list">
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