<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$addressN = $_POST['addressN'];
$mobileNo = $_POST['mobileNo'];
$emailN = $_POST['emailN'];
$uName = $_POST['uName'];
$passwordN = $_POST['passwordN'];

$conn=new mysqli('localhost','root','','library_management_system');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into form(firstName,lastName,gender,dob,addressN,mobileNo,emailN,uName,passwordN) values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssisss",$firstName,$lastName,$gender,$dob,$addressN,$mobileNo,$emailN,$uName,$passwordN);
    $stmt->execute();
    echo"Registration Succesfully...";
    $stmt->close();
    $conn->close();
}

?>