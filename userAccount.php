<?php

require 'config1.php';

  $memberId = $_POST['memberId'];
  $name = $_POST['name'];
  $registeredyear   = $_POST['registeredyear'];
  $renewedBooks   = $_POST['renewedBooks'];
  $borrowedBooks   = $_POST['borrowedBooks'];
  $updateBooks = $_POST['updateBooks'];

  $memberFeedback = $_POST['memberFeedback'];

insertData($memberId , $name ,$registeredyear ,$renewedBooks  ,$borrowedBooks,$updateBooks ,$memberFeedback);
function insertdata($memberId , $name ,$registeredyear ,$renewedBooks  ,$borrowedBooks,$updateBooks ,$memberFeedback)
{
	global $con;

$sql = "insert into user_account_details(memberId,name,registeredyear,renewedBooks ,borrowedBooks,updateBooks,memberFeedback) 
values('$memberId ',' $name ','$registeredyear ','$renewedBooks ' ,'$borrowedBooks','$updateBooks ','$memberFeedback ')";

if($con ->query($sql))
{
echo "inserted Successfuly";	
	
}

else 
{
	
	echo "Error:". $con->error;	
}
}

?>