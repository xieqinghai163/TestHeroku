<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en-CA" xml:lang="en-CA">
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/foodCenter.js"></script>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<title>user</title></head>
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
         <h1><?php echo $_GET["actionMethod"]; ?> Food Center</h1>
         <hr />
            <form id="foodCenterAddForm" name="foodCenterAddForm"> 
                <table>
                <tr>
                <th>FC_ID</th>
                <td>
				<input type = "hidden" name = "FC_ID"  value="<?php if(isset($_GET["FC_ID"])) echo $_GET["FC_ID"]; ?>" /><label id="FC_ID"><?php if(isset($_GET["FC_ID"])) echo $_GET["FC_ID"]; ?></label>
				</td>
                </tr> 
                <tr>
                <th>NAME</th>
                <td><input type = "text" name = "NAME" id="NAME"  maxlength="20" size = "30" required="required" /></td>
                </tr>
                <tr>
                <th>Address</th>
                <td><input type = "text" name = "Address" id="Address" maxlength="20" size = "30" required="required"/></td>
                </tr>   
                <tr>
                <th>Contact</th>
                <td><input type = "text" name = "Contact" id="Contact" size = "30" /></td>
                </tr>               
                <tr>
                <th>Desc</th>
                <td>
				<textarea name = "Desc" id ="Desc" cols="50" rows="10"></textarea></td>
                </tr>                 
                <tr>
                <th>Rating</th>
                <td><input type = "number" name = "Rating" id ="Rating" size = "2" min="1" max="5" /></td>
                </tr>                  
                <tr>
                <th>Catagory</th>
                <td>
				<select name="C_ID" id="C_ID">
				</select>
				</td>
                </tr>  
				</table>
				<hr />
				<table>
                <tr>
                <td><input type="button" value = "Confirm" id="addConfirm"/></td>
                <td><input type="reset" value="Reset" id="resetBtn"/>
				<input type="hidden" name="actionMethod" id="actionMethod" value="<?php echo $_GET["actionMethod"]; ?>Confirm" />
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