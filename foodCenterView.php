<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en-CA" xml:lang="en-CA">
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/foodCenter.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB-kuP8PgU7zsTI1RquIimIMfF0CdgUFeU&sensor=false"></script>
<script type="text/javascript" src="js/googlemaps.js"></script>
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
         <h1>Add Food Center</h1>
		 <div id="mydiv"></div>
         <hr />
            <form id="foodCenterViewForm" name="foodCenterViewForm"> 
                <table>
                <tr><input type="hidden" name="FC_ID" value="<?php echo $_GET["FC_ID"]; ?>"/>
                <th>FC_ID</th>
                <td><label id="FC_ID"><?php echo $_GET["FC_ID"]; ?></label></td>
                </tr> 
                <tr>
                <th>NAME</th>
                <td><label id="NAME" ></label></td>
                </tr>
                <tr>
                <th>Address</th>
                <td><div id="googleMap" style="width:500px;height:380px;"></div></td>
                </tr>   
                <tr>
                <th>Contact</th>
                <td><label id="Contact" ></label></td>
                </tr>               
                <tr>
                <th>Desc</th>
                <td>
				<label id ="Desc" ></label></td>
                </tr>                 
                <tr>
                <th>Rating</th>
                <td><label id ="Rating" ></label></td>
                </tr>               
                <tr>
                <th>Catagory</th>
                <td><label id ="C_ID"></label></td>
                </tr> 
				</table>
				<hr />
				<table>
                <tr>
				<td><input type="button" value="return"  onclick="window.history.back()" />
				<input type="hidden" name="actionMethod" id="actionMethod" value="view" />
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