document.write('<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> ');

window.onload = initialize;

var map;
function initialize() {
    var myLatlng = new google.maps.LatLng(35.6315107,139.7895538);
    var myOptions = {
        zoom: 15,
        center: myLatlng,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map"), myOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map

    });

}

