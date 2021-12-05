<?php
$name=$_POST['name'];
$comment = $_POST['comment'];
 

$conn=new mysqli('localhost','root','','library_management_system');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into commen(name,comment) values(?,?)");
    $stmt->bind_param("ss",$name,$comment);
    $stmt->execute();
    echo"Comment Added...";
    $stmt->close();
    $conn->close();
}

?>