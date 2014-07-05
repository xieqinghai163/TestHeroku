$(document).ready(function(){
	var action=$("#actionMethod").val();
	if (action == "updateConfirm" || action == "addConfirm") {	
		if (action == "updateConfirm")
			$("#actionMethod").val("update");
		else
			$("#actionMethod").val("add");
		$.post("./foodCenterProcess.php", $("#foodCenterAddForm").serialize(),function(data, status){	
			if (action == "updateConfirm") {
				$("#C_ID option").eq(0).nextAll().remove();		
				$("#C_ID").append(data.catagoryList);	
				//alert(data.editInfo);
				$("#NAME").val(data.editInfo[0]);
				$("#Address").val(data.editInfo[1]);
				$("#Contact").val(data.editInfo[2]);
				$("#Desc").val(data.editInfo[3]);
				$("#Rating").val(data.editInfo[4]);
				$("#C_ID").val(data.editInfo[5]);
			} else {
				$("#C_ID option").eq(0).nextAll().remove();		
				$("#C_ID").append(data.catagoryList);	
			}
			
			$("#actionMethod").val(action);			
		}, "json");	
	} else if (action == "view" ) {
		$.post("./foodCenterProcess.php", $("#foodCenterViewForm").serialize(),function(data, status){
			$("#NAME").html(data.editInfo[0]);
			google.maps.event.addDomListener(window, 'load', getmylocation(data.editInfo[1],"googleMap"));
			$("#Contact").html(data.editInfo[2]);
			$("#Desc").html(data.editInfo[3]);			
			$("#Rating").html(data.editInfo[4]);
			$("#C_ID").html(data.editInfo[5]);
		}, "json");		
	} else {
		$.post("./foodCenterProcess.php", $("#foodCenterForm").serialize(),function(data, status){
			$("#foodCenterListTbl tr:gt(0)").remove();		
			$("#foodCenterListTbl").append(data.strFoodCenterList);			
			
			$("#searchCatagory option").eq(0).nextAll().remove();		
			$("#searchCatagory").append(data.catagoryList);	
		}, "json");		
	}
	
	$("#serchButton").click(function(){		
		$.post("./foodCenterProcess.php", $("#foodCenterForm").serialize(), function(data, status){
			$("#foodCenterListTbl tr:gt(0)").remove();
			$("#foodCenterListTbl").append(data.strFoodCenterList);	
		}, "json");												 
	});		
	$("#delFoodCenter").click(function(){		
		$("#actionMethod").val("delete");
		$.post("./foodCenterProcess.php", $("#foodCenterForm").serialize(), function(data, status){			
			alert(data.message);
			$("#actionMethod").val("list");
			location.reload(true);
		}, "json");												 
	});		
	$("#addConfirm").click(function(){	
	alert($("#actionMethod").val());
		//$("#foodCenterAddForm").validator();
		$.post("./foodCenterProcess.php", $("#foodCenterAddForm").serialize(), function(data, status){		
			alert(data);	
			var action=$("#actionMethod").val();
			if (action == "addConfirm") 
				$("#resetBtn").click();			
		});												 
	});	
	$("#addFoodCenter").click(function(){
		$(location).attr('href','./foodCenterAdd.php?actionMethod=add');
	});		
});