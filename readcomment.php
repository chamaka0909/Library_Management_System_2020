<?php

include_once'config.php';
?>

<?php


$name = $_POST['name'];
$comment =$_POST['comment'];
  
  


$sql = "insert into comment(NO,name,comment) 
values('','$name','$comment')";

if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('comment added')</script>";
		
	}
	else{
		echo "<script>alert('Error ')</script>";
		
		}
  mysqli_close($conn);

?>