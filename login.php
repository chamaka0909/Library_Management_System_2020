<?php

include_once'config123.php';
?>

<?php

  $username = $_POST['username'];
  $password = $_POST['password'];
  


$sql = "insert into login(username,password) 
values('$username','$password')";

if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('LOGIN SUCCESSFULY')</script>";
		
	}
	else{
		echo "<script>alert('TRY AGAIN')</script>";
		
		}
  mysqli_close($conn);

?>