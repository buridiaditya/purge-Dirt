<html>
	<head>
		<title>Who are you</title>
		<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet"> 
		<style type="text/css">
			html { 
					background: url(bg.jpg) no-repeat center center fixed;
  					-webkit-background-size: cover;
  					-moz-background-size: cover;
  					-o-background-size: cover;
  					background-size: cover;
				}
			html, body {
    			height: 100%;
			}
			html {
    			display: table;
    			margin: auto;
			}
			body {
				text-align: center;
    			display: table-cell;
    			vertical-align: middle;
			}
		</style>
	</head>
	<body style = "font-family: 'Nixie One'; font-size: 70px; color: #FFFFFF;"> 
		Are you a <br/><br/>
		<script>
			function reporter() {
				window.location = "http://localhost:8080/reporter-make-query.php";
			}
			function cleaner() {
				window.location = "http://localhost:8080/cleaner-do.php";
			}
		</script>
		<span style = "font-family: 'Cabin Sketch'; font-size: 100px; color: #FFFFFF'" onclick = "reporter();">Reporter</span>
		<br/>
		or<br/>
		<span style = "font-family: 'Cabin Sketch'; font-size: 100px; color: #FFFFFF'" onclick = "cleaner();">Cleaner</span>

	</body>
</html>