<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
lang="en-CA" xml:lang="en-CA">
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<title>user</title></head>
<body>
<div id="allcontent">
    <div id="main">
        <article>
         <h1>Login</h1>
         <hr />
            <form id="loginForm" name="loginForm"> 
                <table>
                <tr>
                <th>User ID</th>
                <td><input type = "text" name = "login_user_id" id="login_user_id" size = "30" /></td>
                </tr> 
                <tr>
                <th>Password</th>
                <td><input type = "password" name = "login_pass" id="login_pass"  maxlength="20" size = "30" /></td>
                </tr>                  
                <tr>
                <th><input type="button" value = "Confirm" id="loginBtn"/></th>
                <td><input type="reset" value="Reset" id="resetBtn"/></td>
                </tr>
                </table>
            </form>
        </article>
    </div>    
</div>
</body>
</html>