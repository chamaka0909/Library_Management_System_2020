<?php
	require 'config2.php';
	
	$email = $_POST['email'];
	$cfeedback =$_POST['cfeedback'];
insertData ($email, $cfeedback);	
	
	function insertData ( $email, $cfeedback)
		{
			global $con;
			
			$sql ="insert into feedback(email, cfeedback) values ('$email','$cfeedback')";
			
			if($con -> query ($sql))
			{
				echo "inserted successfully";
			}
			else{
				echo "Error:". $con -> error;
			}
		}
?>