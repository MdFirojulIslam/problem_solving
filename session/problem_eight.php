<?php

	//Write a PHP script to set a secure cookie that can only be transmitted over an  encrypted connection.

	$cookieName = 'visited';

	if(isset($_COOKIE[$cookieName]))
	{
		echo "welcome! you have visited before";
	}
	else 
	{
		echo "Welcome! you have visited first time";
	}
?>