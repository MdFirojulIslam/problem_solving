<?php
	//Write a PHP script to destroy a session and unset all session variables

	// session_start();
	// $_SESSION = []; 
	// session_destroy();

	// echo "all session are detroyed and all session variables are unset now";

	session_start();

	if(isset($_SESSION['userid']))
	{
		$value = $_SESSION['userid'];
		echo "userid is ". $value;
	}

	else 
	{
		echo "all session are destroyed now";
	}
?>