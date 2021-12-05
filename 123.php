<?php

	
$conn=new mysqli("localhost","root","","library_management_system");

	if($conn->connect_error)
	{
		die("Connection failed: " . $con->connect_error);
	}
?>