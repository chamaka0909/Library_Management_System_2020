<!doctype html>
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
<li class="menu"><a href ="user.php">User Account</a></li>
</h3>


<div class ="box">

<form>

<input type="text" name ="" placeholder="   Type to Search">
<input class ="btn"type="submit" name ="" value=" search " >

</form>


</ul>
</nav>
</header>
</div

<br>

<center><h2><b><i>E-items</i></b></h2></center>
<img src="images/ky.jpg">
<img src="images/maya.jpg">
<img src="images/the.jpg">
<img src="images/sa.jpg">
<img src="images/harry.jpg">
<img src="images/fic.jpg">
<img src="images/du.png">
<img src="images/4.jpg">
<img src="images/2.jpg">
<img src="images/42.jpg">
<img src="images/3.jpg">
<img src="images/20.jpg">
<img src="images/news.jpg">
<?php
require "config1.php";
?>
<form action="item.php" method="post" class="btn1" onsubmit="return checkpassword()"> 

select e-journals<br>
<select name="eJournals">
     <option value="ABA journal">ABA journal</option>
     <option value="AGORA international journal">AGORA international journal</option>
	 <option value="AIPLA journal">AIPLA journal</option>
	 <option value="administrative journal">administrative journal</option>
	 <option value="fashion designing journal">fashion designing journal</option>
	</select> 

<br><br><br>
download e-books<br>
<select name="eBooks">
   <option value="science">science</option>
   <option value="maths" >maths</option>
   <option value="architecture">architecture</option>
   <option value="novels" >novels</option>
   <option  value="fiction">fiction</option>
 </select>
 <br><br><br>
 read e- books<br>
 <select name="readBooks">
    <option value="english literature"> english literature</option>
	<option value="sinhala literature">sinhala literature</option>
	<option value="humorous novels">humorous novels</option>
	<option value="science and technology" >science and technology</option>
	<option value="combined maths">combined maths</option>
	<option value="fiction">fiction</option>
	<option value="dictionary">dictionary</option>
	</select>
	<br><br><br>
	 select standalone books<br>
	<select name="standaloneBooks">
	<option value="the night circus">the night circus</option>
	<option value="frozen beauty">frozen beauty</option>
	<option value="good bye">good bye</option>
	<option value="just breathe">just breathe</option>
	<option value="tweet cute by ema">tweet cute by ema</option>
	<option value="witches">witches</option>
	</select>
	<br><br><br>
	select book series<br>
	<select name="bookSeries">
	<option value="the best epic fantacy">the best epic fantacy</option>
	<option value="dark lover">dark lover</option>
	<option value="romance series">romance series</option>
	<option value="romance series">harry potter</option>
	<option value="magic bites">magic bites</option>
	<option value="urban series fantacy" >urban series fantacy</option>
	</select>
	<br><br><br>
	<h2>to store details please fill the below details<h2><br>
	index No<br>
	<input type="text"id="fname"name="indexNo" style="width:500px;"placeholder="enter index number"><br><br>
	firstName<br>
	<input type="text"id="fname"name="firstName" style="width:500px;"placeholder="enter first name"><br><br>
	lastName<br>
	<input type="text"id="lname"name="lastName" style="width:500px;"placeholder="enter last name"><br><br>
	contactNumber<br>
	<input type="text"id="mobile"name="contactNumber"style="width:500px;"placeholder="enter mobile number" pattern="[0-9]{10}"><br><br>
	gender<br>
<input type="radio" id="gender" name="gender" value="male">male
<input type="radio" id="gender" name="gender" value="female">female
<br><br>
address<br>
<input type="text"id="add"name="address" style="width:500px;"placeholder="enter address"><br><br>
	password<br>
<input type="password"id="pawrd"name="pawrd"style="width:500px;"placeholder="enter password" pattern="[a-zA-Z0-9]{5,10}"><br><br>
re-enter password<br>
<input type="password"id="rpawrd"name="rpawrd"style="width:500px;"placeholder="re-enter password" required ><br><br>
accept privacy policy and terms<br>
<input type="checkbox"id="policy"name="policy"onclick="enablebutton()" required><br><br>
<br><br>
<input type="submit" id="btn1" name="submit" value="submit" ><br><br>
</form>
<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Prime<span>Library</span></h3>
 
		<p class="footer-links">
		<a href="#" class="footer-company-about">Follow Us On </a><br>
	·
		<a href="#" class="footer-company-about">Facebook</a></br>
	·
		<a href="#" class="footer-company-about">Instagram</a><br>
	·
		<a href="#" class="footer-company-about">Twitter</a><br>
	·
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
	·
		<a href="#" style="color:white;">Online Assistant</a></br>
	·
		<a href="#" style="color:white;">Our Services</a><br>
	·
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
	</html>
	
	