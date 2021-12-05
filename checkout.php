<?php

include_once'config.php';
?>

<?php

  $userId = $_POST['userId'];
  $userName = $_POST['userName'];
  $bookId   = $_POST['bookId'];
  $email    = $_POST['email'];
  $pnumber  = $_POST['pnumber'];
  $address  = $_POST['address'];
  $borrow   = $_POST['borrow'];
  $payment  = $_POST['payment'];
  


$sql = "insert into book_checkout(NO,userId,userName,bookId,email,pnumber,address,borrow,payment) 
values('','$userId','$userName','$bookId','$email ',' $pnumber  ','$address','$borrow ','$payment')";

if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Book checkout successfully')</script>";
		
	}
	else{
		echo "<script>alert('Error to Book checkout')</script>";
		
		}
  mysqli_close($conn);

?>