<?php

require 'config1.php';
   $eJournals  = $_POST['eJournals'];
   $eBooks  = $_POST['eBooks'];
   $readBooks  = $_POST['readBooks'];
    $standaloneBooks  = $_POST['standaloneBooks'];
	 $bookSeries   = $_POST['bookSeries'];
  $indexNo   = $_POST['indexNo'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $contactNumber   = $_POST['contactNumber'];
  $gender    = $_POST['gender'];
  $address   = $_POST['address'];

insertData($eJournals,$eBooks ,$readBooks ,$standaloneBooks ,$bookSeries,$indexNo,$firstName,$lastName,$contactNumber,$gender,$address);
function insertData($eJournals,$eBooks ,$readBooks ,$standaloneBooks ,$bookSeries,$indexNo,$firstName,$lastName,$contactNumber,$gender,$address)
{
	global $con;

$sql = "insert into member_eitem_details(eJournals,eBooks ,readBooks,standaloneBooks,bookSeries,indexNo,firstName,lastName,contactNumber,gender,address) 
values( '$eJournals','$eBooks' ,'$readBooks ','$standaloneBooks' ,'$bookSeries' ,'$indexNo','$firstName','$lastName','$contactNumber','$gender','$address')";

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