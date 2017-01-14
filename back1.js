var x = document.getElementById("demo");

	function getLocation() {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(saveCookieAndSave);
	    } else { 
	        x.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}
  function makeCookieAndSave(position){
    document.cookie = "lat = " + position.coords.latitude;
    document.cookie = "lang = " + position.coords.longitude;
    /// SAVE COOKIES INTO FILE // 
  }
  function cleaner(){
    /// FILE STREAM ///
    val latlng = {lat : 12 , lng: 12};
    document.getElementById('1').addEventListener('click', function() {
          setCleanerData(latlng);
        });
  }
  function setCleanerData(latlng,id1){
    var geocoder = new google.maps.Geocoder;
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[1]) { 
              document.getElementById(id1).innerHTML(results[1].formatted_address);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
  }
  function onClickCleaner(uluru){
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
    var geocoder = new google.maps.Geocoder;
    var infowindow = new google.maps.InfoWindow;
    geocoder.geocode({'location': uluru}, function(results, status) {
        if (status === 'OK') {
            if (results[1]) { 
              map.setZoom(11);
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