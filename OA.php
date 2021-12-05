<?php

include_once'config123.php';
?>

<?php

  $messagebox = $_POST['messagebox'];



$sql = "insert into assistance(messagebox) 
values('$messagebox')";

if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('SEND SUCCESSFULY')</script>";
		
	}
	else{
		echo "<script>alert('TRY AGAIN')</script>";
		
		}
  mysqli_close($conn);

?>
	
	