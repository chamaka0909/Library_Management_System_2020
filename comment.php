<?php
   include_once '123.php' ;
 ?>


<html>
<head>
<link rel="stylesheet" href="style/read.css"/>
</head>
<body>


<div >
<header>
<nav>

<ul class ="menu">

<img src ="images/img1.png" height ="15%" width ="15%" align ="left" title = "PRIME LIBRARY">
<a href="default.asp"><img src ="images/img2.png" class ="login" height ="10%" width ="10%" align ="right" title = "LOGIN"></a>
<p class ="heder"  style="font: normal 50px 'Courier', cursive"> <b>PRIME LIBRARY</b></p>

<h3>
<li class="menu"><a href="home.html" ></i> Home</a></li>
<li class="menu"><a href ="Membership.html"> New Registration</a></li>
<li class="menu"><a href ="contact.html">Contact Us</a></li>
<li class="menu"><a href ="user.php">User Account</a></li>
</h3>


<form class = "searchbar">
<input type ="txt" placeholder ="Search ">
<button class ="btn"><b>Search</b></button>
</form>

</ul>
</nav>
</header>
</div>	

</br></br>


<p class="tit">COMMENTS</p></br>

<?php

$sql= "select * from commen";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
		echo"<div class=\"ddata\"><p class=\"tit\">Name</br>".$row["name"]."</p> </br>Comment</br>".$row["comment"]."</div>";
	}
}
else{
echo "no comment";
}
?>
	
</br>
<a href="Subjects.html"><input type="button" class="btn2" value="Back"></a>

 
 
 
 <footer class="footer-distributed">
 
		<div class="footer-left"> 
		<h3>Prime<span>Library</span></h3> 
		<p class="footer-links">
		
		<a href="#" >Follow Us On :-</a><br>	
		<a href="#" class="footer-company-about">Facebook</a></br>	
		<a href="#" class="footer-company-about">Instagram</a><br>	
		<a href="#" class="footer-company-about">Twitter</a><br>	
		<a href="#" class="footer-company-about">Google Plus</a><br>
		</p> 
		
		<a href="#" ><img class="media" src ="images/f1.png"  ></a>
		<a href="#" ><img class="media" src ="images/f2.png"  ></a>
		<a href="#" ><img class="media" src ="images/f3.png"  ></a>
		<a href="#" ><img class="media" src ="images/f4.png"  ></a>
		
		
		
		</div>
 
 
		<div class="footer-center">
		<br><br>

		
		<p class="footer-company-about">
	
		<a href="#" style="color:white;">Online Assistant</a></br>
	
		<a href="#" style="color:white;">Our Services</a><br>
	
		<a href="#" style="color:white;">Payments :-</a><br>
		
		<a href="#" ><img  class ="pay" src ="images/pay.png" ></a>
	
		</p><br><br>
		<div>
		<p style="color:white;" class="footer-company-about">21 Galle Road, Colombo 5, SriLanka</p>
		</div>
 
		<div>
		<i></i>
		<p style="color:white;" class="footer-company-about">011-3456789</p>
		</div>
 
		<div>
		<p class="footer-company-about" style="color:white;><a href="prime@gmail.com">contact@primelibrary.com</a></p>
		</div>		
		
 

		</div>
 
		<div class="footer-right">
        <br><br>

		
		<p style="color:white;" class="footer-company-about">
		About the company<br>
	Prime Library is based in the SriLanka,with its registered office in the National Library.
		</p>
 
		<br><br><br>
 
 
		<p class="footer-company-name">Prime Library &copy; 2020</p> 
		</div>
 
		</footer>
 



</body>
</html>



