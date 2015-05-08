<?php

//Configuration for our PHP Server
set_time_limit(0);
ini_set('default_socket_timeout', 300);

session_start();

//Make Constant using define.
define('clientID', '8c6137f1fcc54a2ba780f41b2390c08b');
define('clientSecret', '0baa6ac1ab58432a8a288e8c956f7e7a');
define('redirectURI', 'http://localhost/Amberapi/index.php');
define('ImageDirectory', 'pics/');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">Login</a>
	
</body>
</html>
