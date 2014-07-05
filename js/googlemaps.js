
function getmylocation(address,objname){
	var myLatLng = "";	
	
	var geo = new google.maps.Geocoder;
	geo.geocode({'address':address},function(results, status){
	 if (status == google.maps.GeocoderStatus.OK) {              
			myLatLng = results[0].geometry.location; 
			var mylat=myLatLng.lat();
			var mylng=myLatLng.lng();
			myCenter=new google.maps.LatLng(mylat,mylng);
			initialize(myCenter,objname);
	  } else {
			alert("Geocode was not successful for the following reason: " + status);
		}
	});	
}

function initialize(myCenter,objname)
{	
	var mapProp = {
	  center:myCenter,
	  zoom:15,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map=new google.maps.Map(document.getElementById(objname),mapProp);

	var marker=new google.maps.Marker({
	  position:myCenter,
	  animation:google.maps.Animation.BOUNCE
	});
	marker.setMap(map);	
}