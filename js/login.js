
$(document).ready(function(){
	$.post("./userList.php",function(data, status){
		$("#userListTbl tr").eq(0).nextAll().remove();
		$("#userListTbl").append(data.strUserList);
		$("#role option").eq(0).nextAll().remove();
		//alert(data.strRoleList);
		$("#role").append(data.strRoleList);
	}, "json");	
	
	$("#loginBtn").click(function(){
		if ($("#login_user_id").val()=="") {
			alert("please enter the account");
			$("#login_user_id").focus();
			return false;
		}
		if ($("#login_pass").val()=="") {
			alert("please enter the password");
			$("#login_pass").focus();
			return false;
		}
		$.post("./loginConfirm.php", $("#loginForm").serialize(), function(data, status){
			window.location="./index.php";
		});												 
	});		
});