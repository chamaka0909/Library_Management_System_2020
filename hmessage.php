<?php

include_once'config.php';
?>

<?php


$name = $_POST['name'];
$message =$_POST['message'];
  
  


$sql = "insert into message(NO,name,message) 
values('','$name','$message')";

if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('message added')</script>";
		
	}
	else{
		echo "<script>alert('Error ')</script>";
		
		}
  mysqli_close($conn);

?>