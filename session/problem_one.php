

<?php
	
	//Write a PHP script to set a cookie named "username" with the value "Gulnara Serik" and an expiration time of one hour.

	$cookie_name = 'username';
	$cookie_value = 'gulnara serik';
	$expiration_time = time() + 3600;

	setcookie($cookie_name, $cookie_value, $expiration_time);

	echo date('Y-m-d H:i:s', $expiration_time);
?>