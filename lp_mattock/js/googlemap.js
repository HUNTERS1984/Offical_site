document.write('<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> ');

window.onload = initialize;

  var map;  
  
  function initialize() {
    var myLatlng = new google.maps.LatLng(35.631328,139.7915675);
    var myOptions = {
      zoom: 19,
      center: myLatlng,
	  scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
	var iconBase = 'img/icon/';
    map = new google.maps.Map(document.getElementById("map"), myOptions);
  
    var marker = new google.maps.Marker({
        position: myLatlng, 
		icon: iconBase + 'ico_map.png',
        map: map
    });
  }
 
