<!DOCTYPE html>
<html>
<body>

<link rel ="stylesheet" type ="text/css" href = "styles/mread.css"/>


</body>
</html>

<?php




require 'config.php';

readData();

function readData()


{
	global $conn;
	
	$sql = "SELECT name,message FROM message";
	$result =$conn ->query($sql);
	
	
	if ($result -> num_rows >0)
	
	{
		while($row =$result ->fetch_assoc())
		
		{
			
			echo "<br>Name :".$row["name"] ."<br>Message :".$row["message"]."<br>";
			
			
		}
		
	}
	
	else {
		
		echo "NO RESULTS";
				
	}
	
	$conn ->close();
	
}

