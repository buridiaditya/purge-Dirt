<html>
	<head>
		<title>sudo purge DIRT</title>
		<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet"> 
		 <meta name="google-signin-client_id" content="173388628824-5at6dlpg2k3o0i909007psbjgr46d0eg.apps.googleusercontent.com">
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
			.center {
    			margin: auto;
			    width: 25%;
			}
		</style>
	</head>
	<body style = "font-family:'Special Elite', serif; font-size: 100px; word-spacing: 0px; text-align:center; color: #FFFFFF;">
		$ sudo purge THRASH;<br/><br/>
			<div id="my-signin2" style = "word-spacing: 0px;" class = "center"></div>
		  <script>
		    function onSuccess(googleUser) {
		      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
		      var profile = googleUser.getBasicProfile();
		      console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		      console.log('Name: ' + profile.getName());
		      console.log('Image URL: ' + profile.getImageUrl());
		      console.log('Email: ' + profile.getEmail());
		    }
		    function onFailure(error) {
		      console.log(error);
		    }
		    function renderButton() {
		      gapi.signin2.render('my-signin2', {
		        'scope': 'profile email',
		        'width': 240,
		        'height': 50,
		        'longtitle': true,
		        'theme': 'dark',
		        'onsuccess': onSuccess,
		        'onfailure': onFailure
		      });
		    }
		</script>
		 <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
	</body>
</html>