<?php

	//Write a PHP script to retrieve and display user preferences stored in the session variable.

	session_start();

	if(isset($_SESSION['preference']))
	{
		$session_preference = $_SESSION['preference'];

		foreach ($session_preference as $key => $value) 
		{
			echo "$key => $value <br>";
		}
	}
	else
	{
		echo "preferences is not stored in the session variable";
	}

?>