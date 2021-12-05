<?php 

require 'config2.php';
$cemail
$feedback = $_POST ["feedback"];
$sql="INSERT INTO feedback (feedback) VALUES ($feedback)";

if ($con -> query ($sql)){
	echo "Your Feedback Submission is successful!";
}
else {
	echo "error :", $con -> error;
}
$ con -> close();
?>