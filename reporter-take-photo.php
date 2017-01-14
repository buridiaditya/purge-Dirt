<html>
	<head>
		<title>Take Photo</title>
	</head>
	<body>
		<?php
			$data = file_get_contents('users.txt');
			$obj = json_decode($data, true);
			echo $obj->{"a"};
			var_dump($obj);
		?>
	</body>
</html>