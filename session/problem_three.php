<?php 

	//Write a PHP script to delete a cookie named "username".
	// $cookieName = 'username';
	// setcookie($cookieName, "", time()-3600);
	// echo "the cookie name 'username' has been deleted";
	
	$cookieName = 'username';
	if(isset($_COOKIE[$cookieName]))
	{
		$cookie_value = $_COOKIE[$cookieName];
		echo "cookieName user name has been found and value is : ". $cookie_value;
	}
	else 
	{
		echo "cookie 'username' is not found";
	}
?>