<html>
	<head>
		<title>Take Photo</title>
	</head>
	<body>
		<script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw0QqwZ-GYPAZ87Fsu7HlELk2pWvPdud8&callback=getLocationName">
    	</script>
		<?php
			$lat = $_COOKIES["lat"];
			$lang = $_COOKIES["long"];
			$email = $_COOKIES["email"];
			$obj = json_decode(file_get_contents("users.txt"));
			$obj[count($obj)] = $email;
			$obj[count($obj)] = $lat;
			$obj[count($obj)] = $lang;
			file_put_contents("users.txt", json_encode($obj));
		?>
		<script src = "index.js"></script>
		<script>
			function getLocation() {
			    if (navigator.geolocation) {
			        navigator.geolocation.getCurrentPosition(callFunc);
			    }
			}
			function callFunc(position) {
				getLocationName(position.coords.latitude, position.coords.longitude, "locationDisplayer");
			}
		</script>
		<span id = "locationDisplayer" onload = "getLocation();"> </span>
	</body>
</html>