<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en-CA" xml:lang="en-CA">
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/catagory.js"></script>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<title>Catagory</title></head>
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
         <h1><?php echo $_GET["actionMethod"]; ?> Catagory</h1>
         <hr />
            <form id="catagoryAddForm" name="catagoryAddForm"> 
                <table>
                <tr>
                <th>C_ID</th>
                <td><input type = "hidden" name = "C_ID" size = "30"  value="<?php echo $_GET["C_ID"]; ?>" /><label id="C_ID"></label></td>
                </tr> 
                <tr>
                <th>NAME</th>
                <td><input type = "text" name = "NAME" id="NAME"  maxlength="20" size = "30" required="required"/></td>
                </tr>
				</table>
				<hr />
				<table>
                <tr>
                <td><input type="button" value = "Confirm" id="addConfirm"/></td>
				<td><input type="button" value="return"  onclick="window.history.back()" /></td>
                </tr>
                </table>
				<input type="hidden" name="actionMethod" id="actionMethod" value="<?php echo $_GET["actionMethod"]; ?>Confirm">
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