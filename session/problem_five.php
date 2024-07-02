<?php
	//Write a PHP script to retrieve and display the value of the session variable "userid".

	session_start();
	if(isset($_SESSION['userid']))
	{
		$value = $_SESSION['userid'];
		echo "the value of the session variable 'userid' is : ". $value;
	}
	else 
	{
		echo "session variable 'userid' is not found";
	}
?>