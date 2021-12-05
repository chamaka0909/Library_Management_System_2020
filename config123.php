<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "library_management_system";
	
$conn=new mysqli($servername,$username,$password,$db );



	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	echo "connected successfully";
?>
