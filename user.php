<!DOCTYPE HTML>
<head>
<title>Library Management System</title>
	<link rel="stylesheet" type="text/css" href="styles/user.css"/>
	
	<script src="js/userAccount.js"></script>
</head>
<body>
<div >
<header>
<nav>

<ul class ="menu">

<img src ="images/img1.png" height ="15%" width ="15%" align ="left" title = "PRIME LIBRARY">
<a href="default.asp"><img src ="images/img2.png" class ="login" height ="10%" width ="10%" align ="right" title = "LOGIN"></a>
<p class ="heder"  style="font-size:40px"> <b>PRIME LIBRARY</b></p>

<h3>
<li class="menu"><a href="home.html" ></i> Home</a></li>
<li class="menu"><a href ="Membership.html"> New Registration</a></li>
<li class="menu"><a href ="contact.html">Contact Us</a></li>
<li class="menu"><a href ="#">User Account</a></li>
</h3>

<form class = "searchbar">
<input type ="txt" placeholder ="Search ">
<button class ="btn"><b>Search</b></button>
</form>

</ul>
</nav>
</header>
</div>
<br>
<center><h2><strong><em>user account page</em></strong></h2></center>
	<div class=" user"  style= borde-style:gray;border-color:darkblack  id="tbl">
		<button class="btn1" id= "bUtton1" onclick="loadData('button1')">membership details</button>
		<button class="btn1" id= "bUtton2" onclick="loadData('button2')">book checkout</button>
		<button class="btn1" id= "bUtton3" onclick="loadData('button3')">book  check in</button>
		<button class="btn1" id= "bUtton4" onclick="loadData('button4')">overdue books</button>
		<button class="btn1" id= "bUtton5" onclick="loadData('button5')">recently viewed books</button>
		<button class="btn1" id= "button6" onclick="loadData('button6')">transaction history</button>
	</div>
<center><img src="images/user.png"  height="600" width="800"></center>
<h1><center><i>click above buttons to see details</i></center></h1>
	<img id="img1" class="logo" height="400" width="600">
	
	<p id="para1" align= "center" class="para2"></p>
	<?php
	require "config1.php";
	?>
	<form  method="post"class="btn2" action="userAccount.php">
	<center><h1><b><i>user account details</i></b></h1></center>
	member Id<br>
	<input type="text"id="id"name="memberId" style="width:500px;"placeholder="enter member id"><br><br>
	name<br>
	<input type="text"id="name"name="name" style="width:500px;"placeholder="enter member name"><br><br>
	registered year<br>
	<input type="text"id="date"name="registeredyear"style="width:500px;"placeholder="enter registered year"> <br><br>
    renew books<br>
    <input type="text"id="id"name="renewedBooks" style="width:500px;"placeholder="enter renew books"><br><br>
	borrowed Books<br>
	<input type="text"id="id"name="borrowedBooks" style="width:500px;"placeholder="enter borrowed books"><br><br>
	update Books<br>
	<input type="text"id="id"name="updateBooks" style="width:500px;"placeholder="update as your favour"><br><br>
	
	member Feedback<br>
	<input type="text"id="fee"name="memberFeedback" style="width:500px;"placeholder="your feedback"><br><br>
	<input type="submit" id="btn1" name="submit" value="submit " ><br><br>
	</form>
<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Prime<span>Library</span></h3>
 
		<p class="footer-links">
		<a href="#" class="footer-company-about">Follow Us On </a><br>
	??
		<a href="#" class="footer-company-about">Facebook</a></br>
	??
		<a href="#" class="footer-company-about">Instagram</a><br>
	??
		<a href="#" class="footer-company-about">Twitter</a><br>
	??
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
	??
		<a href="#" style="color:white;">Online Assistant</a></br>
	??
		<a href="#" style="color:white;">Our Services</a><br>
	??
		<a href="#" style="color:white;">Payments</a><br>
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