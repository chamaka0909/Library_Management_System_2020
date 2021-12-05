<?php

	
$con=new mysqli("localhost","root","","library_management_system");

	if($con->connect_error)
	{
		die("Connection failed: " . $con->connect_error);
	}
?>
