<?php
	
	//Write a PHP script to set a session variable named "userid" with the value 10020

	session_save_path('v\p(G):/setCookie/');
	session_start();
	$_SESSION['userid'] = 10020;

	echo "session variable named 'userid' with the value 10020 has been set";
?>