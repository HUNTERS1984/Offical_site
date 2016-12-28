document.write('<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> ');

var map;

window.onload =function(){
	initialize01();
	initialize02();
}

function initialize01() {
	var myLatlng = new google.maps.LatLng(35.661391,139.703317);
	var myOptions = {
		zoom: 16,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	map = new google.maps.Map(document.getElementById("map01"), myOptions);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map
	});
}

function initialize02() {
	var myLatlng = new google.maps.LatLng(35.174227, 136.902573);
	var myOptions = {
		zoom: 16,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	map = new google.maps.Map(document.getElementById("map02"), myOptions);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map
	});
}
