var x = document.getElementById("demo");

	function getLocation() {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(initMap);
	    } else { 
	        x.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}


// function iniMapSave(coor) {
// 	window.alert('done writing to a file');
// 	var txtFile = "/Users/buridiaditya/beklean/test.txt";
// 	localStorage.setItem("latitude",coor.latitude);	
// }
	function initMap(position) {
		var uluru = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 4,
		  center: uluru
		});

		var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
        // iniMapSave(position.coords);
        document.getElementById('Submit').addEventListener('click', function() {
          geocodeLatLng(position,geocoder, map, infowindow);
        });
    document.cookie = "lat = " + position.coords.latitude;
    document.cookie = "lang = " + position.coords.longitude;
	}
	function geocodeLatLng(position,geocoder, map, infowindow) {
        var latlng = {lat: position.coords.latitude, lng: position.coords.longitude};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[1]) {	
              map.setZoom(11);
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
              infowindow.setContent(results[1].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
    }