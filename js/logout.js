
$(document).ready(function(){
	$.post("./logoutList.php",function(data, status){
		alert(data);
		window.location="./login.php";
	});	
});