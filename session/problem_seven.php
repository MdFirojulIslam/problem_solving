<?php
	//Write a PHP script to set a secure cookie that can only be transmitted over an encrypted connection
	
	$cookieName = "my_Cookie";
	$cookieValue = "Example_cookie_value";
	$expirationTime = time() + 3600; // current time + 1 hour
	$secureOnly = true; // Set the cookie to be transmitted only over HTTPS

	setcookie($cookieName, $cookieValue, $expirationTime, "/", "", $secureOnly, true);

	echo "Secure cookie named 'my_Cookie' has been set.";

	

?>