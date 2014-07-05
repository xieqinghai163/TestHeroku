$(document).ready(function(){
	var action=$("#actionMethod").val();
	if (action == "updateConfirm") {
			$("#actionMethod").val("update");
			$.post("./catagoryProcess.php",$("#catagoryAddForm").serialize(),function(data, status){			
			$("#C_ID").html(data.catagoryInfo[0]);
			$("#NAME").val(data.catagoryInfo[1]);
			$("#actionMethod").val("updateConfirm");
		}, "json");	
	} else {
			$.post("./catagoryProcess.php",$("#catagoryForm").serialize(),function(data, status){
			$("#catagoryListTbl tr:gt(0)").remove();		
			$("#catagoryListTbl").append(data.catagoryList);	
		}, "json");	
	}
	
	$("#delFoodCenter").click(function(){
		$("#actionMethod").val("delete");
		$.post("./catagoryProcess.php", $("#catagoryForm").serialize(), function(data, status){			
			alert(data.message);			
			$("#actionMethod").val("list");
			location.reload(true);
		}, "json");												 
	});		
	$("#addConfirm").click(function(){
		//$("#catagoryAddForm").validator();
		$.post("./catagoryProcess.php", $("#catagoryAddForm").serialize(), function(data, status){		
			alert(data);	
			var action=$("#actionMethod").val();
			if (action == "addConfirm") 
				$("#NAME").val("");
		});												 
	});	
	$("#addFoodCenter").click(function(){
		$(location).attr('href','./catagoryAdd.php?actionMethod=add');
	});		
});