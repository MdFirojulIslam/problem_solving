<?php
	
	//Write a PHP script to retrieve and display the value of the cookie named "username".

	if(isset($_COOKIE['username']))
	{
		$cookie_v  = $_COOKIE['username'];
		echo "cookie name 'username' is: ". $cookie_v ;
	}
	else
	{
		echo "cookie name 'username' is not found'";
	}

?>